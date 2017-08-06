<?php snippet('header/header') ?>

<div class="row">
  <?php snippet('breadcrumbs'); ?>
</div>

  <div class="row">
    <h1 class="sml col-4 lrg--col-8 xlrg--col-11 xlrg--offset-1"><?= $page->title()->html() ?></h1>
  </div>

  <div class="row">

    <main class="sml med--col-5 lrg--col-8 xlrg--col-6 xlrg--offset-1" role="main">

    


    
      <section>

        <?php if($articles->count()): ?>

          <?php foreach($articles->visible() as $article): ?>
    
            <article class="article article--blog">

              <header class="article-header">
                <img src="<?php $article->coverimage()->url(); ?>" alt="">

                
                <?php if($image = $article->coverimage()->toFile()): ?>
                  <a href="<?= $article->url() ?>" class="article__img-link">
                      <img src="<?= $image->url() ?>" alt="" />
                  </a>
                <?php endif ?>
                

                <h2 class="article__title article__title--blog">
                  <a href="<?= $article->url() ?>" class="article__title-link"><?= $article->title()->html() ?></a>
                </h2>
    
                <p class="article__meta"><?= $article->date('F jS, Y') ?></p>

              </header>
    
            </article>
    
    
          <?php endforeach ?>

        <?php else: ?>
          <p>This blog does not contain any articles yet.</p>

        <?php endif ?>

      </section>
    
      <?php snippet('pagination') ?>
    
    </main>

    <?php snippet('sidebar'); ?>
  </div>

<?php snippet('footer') ?>