<?php snippet('header/header') ?>

<main class="main" role="main">
    <h1><?php echo $page->title()->html() ?></h1>
    
    <div class="resource-type">
        <h2 class="resource-type__title">DIY Website Builders</h2>
        <?php snippet('resource') ?>
    </div>
</main>

<?php snippet('footer') ?>