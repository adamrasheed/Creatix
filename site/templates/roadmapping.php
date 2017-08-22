<?php snippet('header/header') ?>

  

    <div class="row">
      <?php snippet('breadcrumbs'); ?>
      <h1 class="title--flex"><?= $page->title()->html() ?></h1>
    </div>

    <div class="row">
      <main class="main main--narrow sml roadmapping" role="main">

        <?php if($image = $page->image()): ?>
          <figure class="coverimage-figure">
            <img src="<?= $image->url() ?>" alt="" />
          </figure>
        <?php endif ?>

        <?= $page->text()->kirbytext() ?>

        <div class="roadmapping__cta-info">
          <h3 class="roadmapping__cta-info-title center"><?= $page->cta_title() ?></h3>
          <div class="roadmapping__cta-info-text center"><?= $page->cta_info()->kirbytext() ?></div>

          <a
            href="https://calendly.com/adamrasheed/30min" class="roadmapping__cta-info-cta roadmapping__cta btn btn--primary btn--full"
            target="_blank">
              <?= $page->cta() ?>
          </a>
        </div>
      </main><!-- end main-->
    </div>

  </main>

<?php snippet('footer') ?>