<section class="section-blog">
    <div class="row padding-1">
        <h2 class="section-blog__title">Latest Blog Articles</h2>
        
        <?php foreach(page('blog')->children()->limit(2)->flip() as $article): ?>

        <div class="post-preview sml med--50">
            <a class="post-preview__link" href="<?php echo $article->url() ?>">


                <?php if($image = $article->coverimage()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="" />
                <?php endif ?>
                
                
                <div class="post-preview__overlay"></div>
                <h3 class="post-preview__title"><?php echo $article->title()->html() ?></h3>
            </a>
        </div>

        <?php endforeach ?>
    </div>
</section>