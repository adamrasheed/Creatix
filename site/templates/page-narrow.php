<?php snippet('header/header') ?>

  

    <div class="row">
      <?php snippet('breadcrumbs'); ?>
      <h1 class="title--flex center"><?= $page->title()->html() ?></h1>
    </div>

    <div class="row">
      <main class="main main--narrow sml" role="main">

        <?= $page->text()->kirbytext() ?>

      </main><!-- end main-->
    </div>

  </main>

<?php snippet('footer') ?>