<?php snippet('header/header') ?>

  <div class="row">
    <?php snippet('breadcrumbs'); ?>
  </div>
  
  <div class="row">
    <main class="main--blog sml med--col-5 lrg--col-6 lrg--offset-1" role="main">
      
      <article class="article single wrap">

        <header class="article-header">
          <h1 class="article__title"><?= $page->title()->html() ?></h1>

          <div class="article__meta">
            <?= $page->date('F jS, Y') ?>
          </div>

          <div class="article__share">

          <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook" class="article__share-link article__share-link--fb"><i class="fa fa-facebook"></i> Share on Facebook</a>

            <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @your_account')?>" target="blank" title="Tweet this" class="article__share-link article__share-link--twt"><i class="fa fa-twitter"></i> Tweet</a>

          </div>
        </header>
        
        <?php snippet('coverimage', $page) ?>
        
        <div class="text">
          <?= $page->text()->kirbytext() ?>
        </div>
        
      </article>

      <?php snippet('optin', array( 'article' =>  'optin--post',
                                    'class'   => 'optin--post' )); ?>

      <nav class="nextprev" role="navigation">
           
        <?php if($prev = $page->prevVisible()): ?>

        <a class="prev nextprev__link" href="<?php echo $prev->url() ?>">
            <span class="nextprev__prev">&larr; Previous:</span><br>
            <span class="nextprev__title"><h4><?php echo $prev->title()->html() ?></h4></span>
            <span class="nextprev__desc"><?php echo $prev->description() ?></span>
        </a>

        <?php endif ?>

        
        <?php if($next = $page->nextVisible()): ?>

        <a class="next nextprev__link" href="<?php echo $next->url() ?>">
            <span class="nextprev__next">Next:</span><br>
            <span class="nextprev__title"><h3><?php echo $next->title()->html() ?></h3></span>
            <span class="nextprev__desc"><?php echo $next->description() ?></span>
        </a>

        <?php endif ?>
    </nav>
      
    </main>

    <?php snippet('sidebar'); ?>

    </div><!-- end row -->


<?php snippet('footer') ?>