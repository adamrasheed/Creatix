<div class="mob-menu" id="mobMenu">
    <nav class="mob-nav" role="navigation">
    
        <ul class="mob-nav__list">
        <?php foreach($pages->visible() as $p): ?>

            <li class="mob-nav__item">
                <a class="mob-nav__link<?php e($p->isOpen(), ' mob-nav__link--active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>

        <?php endforeach ?>
        </ul>

    </nav>

    <nav class="mob-nav mob-nav--bottom">
        <ul class="mob-nav__list">
            <li class="mob-nav__item">
                    <a href="http://bit.ly/crtxNCDomain" class="mob-nav__link" target="_blank">Web Domains</a>
            </li>
            <li class="mob-nav__item">
                <a href="http://bit.ly/creatixbluehost" class="mob-nav__link" target="_blank">Web Hosting</a>
            </li>

            <?php
                $roadmapping = $pages->find('roadmapping-session');
                $partnerships = $pages->find('partnerships');
            ?>
            <li class="mob-nav__item">
                <a href="<?= $roadmapping->url() ?>" class="mob-nav__link">
                    <?= $roadmapping->title(); ?>
                </a>
            </li>
            <li class="mob-nav__item">
                <a href="<?= $partnerships->url() ?>" class="mob-nav__link">
                    <?= $partnerships->title(); ?>
                </a>
            </li>
        </ul>
    </nav>
    
    <?php snippet('social') ?>
</div>