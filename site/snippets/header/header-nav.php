<header class="header" role="banner">
    <div class="header__container row">
        <!--Site Logo-->
        <a class="header__logo" id="site-logo" href="<?php echo url() ?>">
            <?php snippet('header/logo') ?>
        </a>
        
        <!--Hamburger Icon-->
        <div id="hamburger" class="menuToggle header__hamburger">
            <i class="fal fa-bars header__hamburger-icon center"></i>
            <h5 class="header__menu-text center">Menu</h5>
        </div>
        
        <!--navigation menu-->
        <?php snippet('header/menu') ?>
    </div><!-- end .container -->
</header>