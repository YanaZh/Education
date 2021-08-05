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
    $defaultTitle = "Title";
    foreach ($menuItems as $menuItem) {
        if (isActivePath($menuItem['path'])) {
            return $menuItem['title'];
        }
    }
    return $defaultTitle;
}

function showMenu($menuItems, $typeSort = "sortAsc")
{
    usort($menuItems, "helper\\" . $typeSort);
    include $_SERVER['DOCUMENT_ROOT'] . '/upload_photo/template/menu.php';
}

function sizeOfFile($filename)
{
    $size = filesize($filename);
    if ($size < 10240) {
        $fullSize = $size . 'б.';
        return $fullSize;
    } elseif ($size >= 10240 && $size < 1048576) {
        $size = round($size / 1024, 2);
        $fullSize = $size . 'Кб.';
        return $fullSize;
    } elseif ($size >= 1048576 && $size <= 5242880) {
        $size = round($size / 1024 / 1024, 2);
        $fullSize = $size . 'Мб.';
        return $fullSize;
    }
}