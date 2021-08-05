<ul>
    <?php
    foreach ($menuItems as $menuItem) { ?>
        <li><a href="<?= $menuItem['path'] ?>"><?= $menuItem['title']; ?></a></li>
    <?php } ?>
</ul>
