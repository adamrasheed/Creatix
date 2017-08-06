<?php snippet('header/header') ?>

<div class="row">
    <?php snippet('breadcrumbs'); ?>
    <h1 class="title--flex"><?php echo $page->title()->html() ?></h1>
    <?php if($page->description() != ''): ?>
        <p class="caset-study__desc padding-1"><?php echo $page->description() ?> </p>
    <?php endif ?>
</div>

<div class="row">
    <main class="main main--case-study sml" role="main">

    <?php if($image=$page->img()->toFile()): ?>    
        <figure class="case-study__featured-img">
            <img src="<?php echo $image->url() ?>">
        </figure>
    <?php elseif($image=$page->seoimg()->toFile()): ?>
        <figure class="case-study__featured-img">
            <img src="<?php echo $image->url() ?>">
        </figure>
    <?php endif ?>
        
        
    <?php echo $page->text()->kirbytext() ?>
    
    </main>
</div>

<div class="row">
    <?php if($prev = $page->prevVisible()): ?>
    <nav class="nextprev nextprev--case-study sml" role="navigation">

        <!-- Previous Case Study -->
            <a class="prev nextprev__link" href="<?php echo $prev->url() ?>">
                <span class="nextprev__prev">&larr; Previous:</span><br>
                <span class="nextprev__title"><h3><?php echo $prev->title()->html() ?></h3></span>
                <span class="nextprev__desc"><?php echo $prev->description() ?></span>
            </a>

    <?php elseif($next = $page->nextVisible()): ?>

    <nav class="nextprev nextprev--case-study nextprev--only-next sml" role="navigation">


        <!-- Next Case Study -->

            <a class="next nextprev__link" href="<?php echo $next->url() ?>">
                <span class="nextprev__next">Next: &#8594;</span><br>
                <span class="nextprev__title"><h3><?php echo $next->title()->html() ?></h3></span>
                <span class="nextprev__desc"><?php echo $next->description() ?></span>
            </a>

        <?php endif ?>
    </nav>
</div><!-- end row -->


<?php snippet('footer') ?>