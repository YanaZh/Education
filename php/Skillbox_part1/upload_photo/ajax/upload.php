<?php
$success = false;
$uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
$maxCount = 5;
$maxSize = 5242880;
$allowedTypes = ['image/jpg', 'image/png', 'image/jpeg'];

if (isset($_POST['upload']) && !empty($_FILES['image'])) {
    if (count($_FILES['image']['name']) < $maxCount) {
        $maxCount = count($_FILES['image']['name']);
    }else {
        require($_SERVER['DOCUMENT_ROOT'] . '/include/error_count.php');
    }
    for ($i = 0; $i < $maxCount; $i++) {
        if ($_FILES['image']['size'][$i] > $maxSize) {
            $_FILES['image']['error'][$i] = 1;
            require($_SERVER['DOCUMENT_ROOT'] . '/include/error_size.php');
            continue;
        }
        if (!in_array($_FILES['image']['type'][$i], $allowedTypes, true)) {
            $_FILES['image']['error'][$i] = 2;
            require($_SERVER['DOCUMENT_ROOT'] . '/include/error_type.php');
            continue;
        }
        if ($_FILES['image']['error'][$i] === 0) {
            $fullFileName = $uploadPath . $_FILES['image']['name'][$i];
            $j = 0;
            while (file_exists($fullFileName)) {
                $j++;
                $fileName = explode('.', $_FILES['image']['name'][$i]);
                $fullFileName = $uploadPath . $fileName[0] . "(" . $j . ")." . $fileName[1];

            }
            move_uploaded_file($_FILES['image']['tmp_name'][$i], $fullFileName);
            $success = true;
        }
    }
    if ($success) {
        require($_SERVER['DOCUMENT_ROOT'] . '/include/success.php');
    } else {
        require($_SERVER['DOCUMENT_ROOT'] . '/include/error.php');
    }
}