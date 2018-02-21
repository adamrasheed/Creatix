<section class="section content-container">
    <h2 class="padding-1 section__title">Case Studies</h2>
    
    <div class="row">
        <?php foreach(page('case-studies')->children()->visible()->limit(2)as $caseStudy): ?>
        <div class="sml med--50 padding-1">
            <div class="case-study__item">
                <a href="<?php echo $caseStudy->url() ?>" class="case-study__link">
                    <?php if($image = $caseStudy->img()->toFile()): ?>
                    <img
                        srcset="
                            <?= $image->resize(240)->url() ?> 240w,
                            <?= $image->resize(538)->url() ?> 400w,
                            <?= $image->resize(1064)->url() ?> 1000w
                        "
                        sizes="(min-width: 400px) 25vw 100vw"
                        src="<?php echo
                        $image->url();?>" alt="" class="case-study__img">
                    <?php else: ?>
                    <img
                        src="https://unsplash.it/600/400" alt="" class="case-study__img">
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
        </div>
        <?php endforeach ?>
    </div><!-- end row -->
    
</section>