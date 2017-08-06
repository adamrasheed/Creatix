<div class="hero__container hero__container--video row">
    <div class="hero__video sml med--col-4">
        <iframe class="hero__video-player" src="https://player.vimeo.com/video/126827819" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

    <div class="hero__copy sml med--col-4">

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
        <a href="" class="hero__cta btn btn--primary cta"><?= $cta ?></a>
    <?php else: ?>
        <a href="" class="hero__cta btn btn--primary cta">Learn More</a>
    <?php endif ?>
    </div>
</div>