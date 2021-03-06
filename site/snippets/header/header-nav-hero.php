<header class="header header--hero" role="banner">
    <div class="header__container row">
        <!--Site Logo-->
        <a class="header__logo header__logo--hero" id="site-logo" href="<?php echo url() ?>">
            <?php snippet('header/logo') ?>
        </a>
        
        <!--Hamburger Icon-->
        <div id="hamburger" class="menuToggle header__hamburger header__hamburger--hero">
            <i class="fa fal fa-bars header__hamburger-icon header__hamburger-icon--hero center"></i>
            <h5 class="header__menu-text center">Menu</h5>
        </div>
        
        <!--navigation menu-->
        <?php snippet('header/menu',
                array('class' => 'header__nav--hero'));
        ?>
    </div><!-- end .container -->
</header>