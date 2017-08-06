<?php snippet('0-header/header') ?>

<div class="row">
    <main class="main--blog" role="main">
        <section id="post">
            <article class="post--single">

                <?php snippet('breadcrumbs') ?>

                <h1 class="post__title"><?= $post->title()->html() ?></h1>
                    
                <?php snippet('post-footer', array('post'        => $post,
                                                    'categories' => true)) ?>

                <?= getCoverImage($post) ?>

                <?= $post->text()->kirbytext() ?>

            </article>

            <?php snippet('social-share') ?>
            <?php snippet('nav-pager') ?>
            
            <?php snippet('optin', array('class' => 'optin--post' )); ?>
        </section>
        
        <?php snippet('disqus', array('disqus_shortname' => 'creatix-1', 'disqus_developer' => true)) ?>

    </main>

    <?php snippet('sidebar') ?>

</div><!-- end row -->



<?php snippet('footer') ?>
