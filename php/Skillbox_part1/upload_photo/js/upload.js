$(function () {
    $("input[name=upload]").on("click", function (event) {
        event.preventDefault();

        var files = document.querySelector("input[type=file]").files;
        var filesCount = files.length;
        var data = new FormData;
        if (filesCount <= 0) {
            $(".response").html("Нет файла.");
            return false;
        }
        for (var i = 0; i < filesCount; i++) {
            data.append('image[]', files[i]);
        }
        data.append('upload', 'y');

        $.ajax({
            url: '/ajax/upload.php',
            type: 'post',
            cache: false,
            contentType: false,
            data: data,
            processData: false,

            success: function (response) {
                $(".response").html(response);
            }
        });
    });
});