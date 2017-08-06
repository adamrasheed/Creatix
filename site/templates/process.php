<?php snippet('header/header') ?>

  <main class="main" role="main">

    <div class="row">
      <?php snippet('breadcrumbs'); ?>
      <h1 class="title--flex"><?= $page->title()->html() ?></h1>

    </div>
      
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>