<div class="hero__container row">

    <div class="hero__copy sml med--col-5 lrg--col-7 lrg--offset-1">

    <?php if($hl = $page->headline()): ?>
        <h1 class="hero__headline mega white"><?= $hl ?></h1>
    <?php else: ?>
        <h1 class="hero__headline mega white">Kickass Custom Websites for Your Business</h1>
    <?php endif ?>

    <?php if($sh = $page->subheadline()): ?>
        <h4 class="hero__subheading white"><?= $sh ?></h4>
    <?php else: ?>
        <h4 class="hero__subheading white">Custom Websites for Your Small Business</h4>
    <?php endif ?>

    <?php if($cta = $page->ctaText()): ?>
        <a href="<?php echo $pages->find('contact')->url() ?>" class="hero__cta btn btn--primary cta">
        <?= $cta ?><i class="fa fa-caret-right hero__cta-icon" aria-hidden="true"></i>
        </a>
    <?php else: ?>
        <a href="<?php echo $pages->find('contact')->url() ?>" class="hero__cta btn btn--primary cta">Learn More</a>
    <?php endif ?>
    </div>
</div>