<aside class="sidebar sml med--col-3 lrg--col-4 xlrg--offset-1">
    <div class="widget widget-about">
        <img src="<?php echo $site->image($site->authorImg())->url() ?>" alt="" class="widget-about__img">
        <h5 class="center widget-about__title">Hi, I'm <?php echo $site->author() ?></h5>
        <p class="center widget__text">I help small businesses design custom websites that help them get more customers and make more money.</p>
        <?php snippet('social') ?>
    </div>
    <div class="widget widget-post widget-post--popular">
        <h4 class="widget-post__title">Latest Posts</h4>

        <?php foreach($pages->find('blog')->children()->visible() as $article): ?>
            <h5 class="widget-post__post">
                <a href="<?= $article->url() ?>" class="widget-post__link"><?= $article->title() ?></a>
            </h5>
        <?php endforeach ?>

    </div>

    <!-- Widget Optin-->
    <?php snippet('widgets/widget-optin'); ?>
    
    
    <!-- Resources Widget -->
    <?php snippet('widgets/resources'); ?>
</aside>