<div class="hero" style="background-image: url('<?php echo $page->heroBackground()->toFile()->url() ?>')">

    <div class="hero__overlay"></div>

    <div class="hero__content">

        <?php snippet('header/header-nav', array('class' => 'header__nav--hero') ) ?>

        <?php snippet('header/hero-container'); ?>

    </div><!-- end hero content-->
    
</div><!-- end hero -->