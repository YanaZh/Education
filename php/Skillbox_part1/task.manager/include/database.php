<?php
function getConnection()
{
    static $connect;
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'mydb';
    if (empty($connect)) {
        $connect = mysqli_connect($host, $user, $password, $dbname);
    }
    return $connect;
}

function closeConnection()
{
    return mysqli_close(getConnection());
}

function getUserByEmail($connect, $e_mail)
{
    $e_mail = mysqli_real_escape_string($connect, $e_mail);
    return mysqli_fetch_assoc(mysqli_query($connect, "select * from users where email = '$e_mail'"));
}

function getUserInfoByID($connect, $id)
{
    $id = mysqli_real_escape_string($connect, $id);
    return mysqli_fetch_assoc(mysqli_query($connect, "select fio, email, phone, action, consent_to_news from users
                                                where users.id = '$id'"));
}

function getUsersGroupByID($connect, $id)
{
    $result = [];
    $id = mysqli_real_escape_string($connect, $id);
    $resultSQL = mysqli_query($connect, "select `groups`.name, `groups`.description from users 
                                                LEFT JOIN user_group ON users.id = user_group.users_id 
                                                LEFT JOIN `groups` ON user_group.groups_id = `groups`.id 
                                                where users.id = '$id'");
    while ($row_groups = mysqli_fetch_assoc($resultSQL)) {
        $result [] = $row_groups;
    }
    return $result;
}