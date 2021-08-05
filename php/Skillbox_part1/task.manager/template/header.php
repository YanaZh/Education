<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 86400);
session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . '/include/database.php');

if (!isset($_SESSION['auth']) || (isset($_GET['login']) && $_GET['login'] === 'no')) {
    $_SESSION['auth'] = false;
    unset($_SESSION['user_info']);
}

if (isset($_GET['login']) && $_GET['login'] === 'no') {
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}

if (!empty($_POST)) {
    if (isset($_COOKIE['login'])) {
        $_POST['login'] = $_COOKIE['login'];
    }
    $connection = getConnection();
    if ($_POST['login'] !== '') {
        if (mysqli_connect_errno()) {
            echo mysqli_connect_error();
        } else {
            $e_mail = mysqli_real_escape_string($connection, $_POST['login']);
            $result = getUserByEmail($connection, $e_mail);
            if ($result && password_verify($_POST['password'], $result['password'])) {
                $_SESSION['auth'] = true;
                $user_id = $result['id'];
                $user_info_result = getUserInfoByID($connection, $user_id);
                $groups = getUsersGroupByID($connection, $user_id);
                $_SESSION['user_info'] = $user_info_result;
                foreach ($groups as $group) {
                    $_SESSION['user_info']['groups'] [] = $group['name'];
                }
                setcookie('login', $_POST['login'], time() + 3600 * 24 * 31, '/');
            }
        }
    }
}


if (isset($_SESSION['auth'], $_COOKIE['login']) && $_SESSION['auth']) {
    setcookie('login', $_COOKIE['login'], time() + 3600 * 24 * 31, '/');
}

$loginOn = true;
if (isset($_SESSION['auth'], $_COOKIE['login'])) {
    $loginOn = false;
}
?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/data/main_menu.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/include/helper.php'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css?<?= rand() ?>" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>
<div class="header">
    <div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
    <div class="clearfix"></div>
</div>

<div class="clear">
    <?php helper\showMenu($mainMenu, "sortAsc", "main-menu"); ?>
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="left-collum-index">
            <h1><?= helper\displayTitle($mainMenu) ?></h1>