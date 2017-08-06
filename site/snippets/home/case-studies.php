<section class="content-container">
    <h2 class="padding-1">Case Studies</h2>
    
    <div class="content-slider">
        <?php foreach(page('case-studies')->children()->visible() as $caseStudy): ?>
        <div class="case-study__item">
            <a href="<?php echo $caseStudy->url() ?>" class="case-study__link">
                <?php if($image = $caseStudy->img()->toFile()): ?>
                <img src="<?php echo $image->url(); ?>" alt="" class="case-study__img">
                <?php else: ?>
                <img src="https://unsplash.it/600/400" alt="" class="case-study__img">
                <?php endif ?>

                <div class="case-study__overlay"></div>
                <div class="case-study__info">
                    <h3 class="case-study__title"><?php echo $caseStudy->title() ?></h3>
                    <ul class="case-study__tags">
                    <?php foreach($caseStudy->categories()->split() as $category): ?>
                        <li class="case-study__category"><?php echo html($category) ?></li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>
    
</section>