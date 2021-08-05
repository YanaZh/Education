<?php require ($_SERVER['DOCUMENT_ROOT'].'/template/header.php'); ?>
<?php if (isset($_SESSION['auth']) && $_SESSION['auth']) { ?>
<div>
    <p> Ф.И.О.: <?= $_SESSION['user_info']['fio']; ?></p>
    <p>e-mail: <?= $_SESSION['user_info']['email']; ?></p>
    <p>phone: <?= $_SESSION['user_info']['phone']; ?></p>
    <p><?php $action = $_SESSION['user_info']['action']=1 ? "Активен" : "Неактивен" ;
        echo $action;?></p>
    <p><?php $consent_to_news = $_SESSION['user_info']['consent_to_news']=1 ? "Согласен на получение уведомлений по email" :
            "Не согласен на получение уведомлений по email" ;
        echo $consent_to_news;?></p>
    <p>Группы:
        <?php
        foreach ($_SESSION['user_info']['groups'] as $group_name) {
            echo $group_name . ', ';
        }
        ?>
    </p>
</div>
<?php } ?>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>
