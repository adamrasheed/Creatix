<?php snippet('0-header/header') ?>

<main class="main" role="main">
    <div class="row">
       <h1 class="title--flex"><?php echo $page->title()->html() ?></h1>
        <p class="title--flex"><?php echo $page->description()->kt() ?></p>
        
        <?php foreach(page('resources')->children() as $resourceType): ?>
        <div class="resource-type med--col-4">
            <h2><?php echo $resourceType->title()->html() ?></h2>
            <?php snippet('resource') ?>
        </div>
        <?php endforeach ?>
    </div>
</main>

<?php snippet('footer') ?>