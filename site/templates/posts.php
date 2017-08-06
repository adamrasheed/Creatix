<?php snippet('0-header/header') ?>

<div class="row">
    <main class="main--blog" role="main" id="posts">

        <?php snippet('breadcrumbs') ?>

        <h1 class="post__title">Blog</h1>

        <?php foreach(page('blog')->children()->flip() as $post): ?>

            <article class="post">
                <a href="<?= $post->url() ?>"><?= getCoverImage($post) ?>  </a> 
                <h2 class="post__title">
                    <a class="post__title-link" href="<?= $post->url() ?>"><?= $post->title()->html() ?></a>
                </h2>

                <?php snippet('post-footer', array('post'       => $post,
                                                   'date'       => true,)) ?>     
            </article>

        <?php endforeach ?>

        <?php snippet('nav-pagination') ?>

    </main>

    <?php snippet('sidebar') ?>

</div><!-- end row -->

<?php snippet( 'footer') ?>
