<ul class="<?=$ulType;?>">
    <?php 
    foreach ($menuItems as $menuItem) { 
        $title = helper\cutTitle($menuItem['title']);?>
        <li><a class = "<?= helper\isActivePath($menuItem['path']) ? "active" : "";?>" href = "<?=$menuItem['path']?>"><?=$title;?></a></li>
    <?php }?>
</ul>
