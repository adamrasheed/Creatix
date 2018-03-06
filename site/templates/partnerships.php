<?php snippet('header/header') ?>

  <main class="main main--narrow container partnerships" role="main">

    <div class="container">
      <?php snippet('breadcrumbs'); ?>
      <h1 class="title--flex"><?= $page->title()->html() ?></h1>
    </div>

        <?= $page->intro()->kirbytext() ?>

      
    <div class="text">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>