<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/upload_photo/template/header.php'); ?>

    <form enctype="multipart/form-data" method="post">
        <p>
            <input type="file" name="image[]" multiple accept="image/*">
            <input type="submit" name="upload" value="Отправить">
        </p>
    </form>
    <div class="response"></div>
    <script type="text/javascript" src="/upload_photo/js/upload.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/upload_photo/template/footer.php'); ?>