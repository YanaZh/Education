<?php

namespace helper;

function isActivePath($path)
{
    return $path == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

function sortAsc($a, $b)
{
    return $a['sort'] > $b['sort'];
}

function sortDesc($a, $b)
{
    return $a['sort'] < $b['sort'];
}

function sortMenu($menuItems, $type = "sortAsc")
{
    usort($menuItems, "helper\\" . $type);
}

function cutTitle($title): string
{
    if (mb_strlen($title) > 15) {
        $title = mb_substr($title, 0, 12) . '...';
    }
    return $title;
}

function displayTitle($menuItems)
{
    $defaultTitle = "Пользователь не авторизован";
    foreach ($menuItems as $menuItem) {
        if (isActivePath($menuItem['path'])) {
            if ($menuItem['path'] === '/') {
                return $menuItem['title'];
            } elseif ($_SESSION['auth']) {
                return $menuItem['title'];
            } else {
                $_GET['login'] = 'yes';
                return $defaultTitle;
            }
        }
    }
}

function showMenu($menuItems, $typeSort = "sortAsc", $ulType = "")
{
    usort($menuItems, "helper\\" . $typeSort);
    include $_SERVER['DOCUMENT_ROOT'] . '/template/menu.php';
}
