<div>Можно загрузить только 5 файлов. Будут загружены файлы:
    <?php
    for ($i = 0; $i < $maxCount; $i++)
        echo $_FILES['image']['name'][$i] . ", ";
    ?>
</div>