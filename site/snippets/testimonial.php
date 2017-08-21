<div class="testimonial__container <?php if($class != ''): ?><?php echo $class ?><?php endif ?>">
    <div class="testimonial__body"><?php echo $page->testimonial()->kirbytext() ?></div>

    <?php if($page->testimonialImage() != ''): ?>

        <?php if($page->testimonialLink() != ''): ?>
            <a href="<?php echo $page->testimonialLink() ?>" class="testimonial__image-link">
                <img src="<?php echo $page->image($page->testimonialImage())->url(); ?>" alt="" class="testimonial__image">
            </a>
        <?php else: ?>
            <img src="<?php echo $page->image($page->testimonialImage())->url(); ?>" alt="" class="testimonial__image">
        <?php endif; ?>

    <?php endif ?>
    <div class="testimonial__client">
        <h5 class="testimonial__client-name"><?php echo $page->testimonialName() ?></h5>
        
        <h5 class="testimonial__client-site">
            <?php if($page->testimonialLink() != ''): ?>
            <a href="<?php echo $page->testimonialLink() ?>" class="testimonial__client-link">
                <?php echo $page->testimonialSite() ?>
            </a>
            <?php else: ?>
            <?php echo $page->testimonialSite() ?>
            <?php endif ?>
        </h5>
        
    </div>
</div>