<div class="widget widget-post widget-post--popular">
    <h3 class="widget-post__title">Latest Posts</h3>

    <?php foreach($pages->find('blog')->children()->visible() as $article): ?>
        <h5 class="widget-post__post">
            <a href="<?= $article->url() ?>" class="widget-post__link"><?= $article->title() ?></a>
        </h5>
    <?php endforeach ?>

</div>