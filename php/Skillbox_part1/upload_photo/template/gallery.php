<?php

$directory = $_SERVER['DOCUMENT_ROOT'] . '/upload_photo/upload/';
$allowedTypes = ['image/jpg', 'image/png', 'image/jpeg'];

$images = array_diff(scandir($directory, SCANDIR_SORT_ASCENDING), array('..', '.'));
foreach ($images as $key => $image) {
    $type = mime_content_type($directory . $image);
    if (!in_array($type, $allowedTypes, true)) {
        unset($images[$key]);
    }
}
?>

<form enctype="multipart/form-data" id="delete_form" method="post">
    <table>
        <?php
        foreach ($images as $key => $image) { ?>
            <tr class="parent_row">
                <td>
                    <div>
                        <img src="<?= '/upload/' . $image ?>" height='200' width='300'>
                    </div>
                </td>
                <td>
                    <div>
                        <?= $image ?>
                    </div>
                </td>
                <td>
                    <?= date("F d Y H:i:s.", filectime($directory . $image)) ?>
                </td>
                <td>
                    <?= helper\sizeOfFile($directory . $image) ?>
                </td>
                <td>
                    <label>Удалить<input type="checkbox" name="fileNames[]" value="<?= $image ?>"></label>
                </td>
            </tr>
        <?php } ?>
    </table>
    <input type="submit" name="delete" value="Удалить">
</form>
<script type="text/javascript" src="/js/gallery.js"></script>
