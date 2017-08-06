<nav class="header__nav" role="navigation">
    
    <ul class="nav-menu">

    <?php foreach($pages->visible() as $p): ?>

        <li class="nav-item">
            <a class="nav-link" <?php e($p->isOpen(), ' class="nav-link--active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>

    <?php endforeach ?>
    </ul>

</nav>