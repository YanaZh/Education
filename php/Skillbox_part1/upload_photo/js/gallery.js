$(function () {
    $("input[name=delete]").on("click",function (event) {
        var files=[];
        $('#delete_form input:checkbox:checked').each(function(){
            $(this).parents('tr.parent_row').remove();
            files.push($(this).val());
        });
        $.post(
            '/upload_photo/ajax/delete.php',
            {
                fileNames: files,
                delete: 'y'
            }
        );
        return false;
    })
});