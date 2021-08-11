<?php
$directory = $_SERVER['DOCUMENT_ROOT'] . '/upload_photo/upload/';

if (isset($_POST['fileNames'], $_POST['delete'])) {
    $filesArray = array_diff(scandir($directory), ['..', '.']);
    foreach ($_POST['fileNames'] as $fileName) {
        if (in_array($fileName, $filesArray, true)) {
            unlink($directory . $fileName);
        }
    }
}
