<section class="content-container content-container--padding row">

    <h2 class="case-studies__title"><?php echo $page->title() ?></h2>
    

        <?php foreach(page('case-studies')->children()->visible() as $caseStudy): ?>

        <div class="case-study__item case-study__item--stacked">
            <a href="<?php echo $caseStudy->url() ?>" class="case-study__link">

                <?php if($image = $caseStudy->img()->toFile()): ?>
                    <img src="<?php echo $image->url() ?>" alt="" class="case-study__img">
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
    
</section>