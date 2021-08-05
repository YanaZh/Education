<div>
    Тип файла не подходит, разрешено
    <?php
    foreach ($allowedTypes as $allowedType) {
        $type = explode('/', $allowedType);
        echo $type[1] . ", ";
    }
    ?>
</div>