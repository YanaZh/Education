<?php
const APP_DIR = DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR;
const VIEW_DIR = DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR;

spl_autoload_register(function ($class) {
    $prefix = "App\\";

    $baseDir = __DIR__ . APP_DIR;

    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);

    $file = $baseDir . $relativeClass . '.php';

    if (file_exists($file)) {
        require($file);
    }
});