<div class="row row--center">
    <div class="section-about__container sml med--col-6 lrg--col-8">
    <?php if($pic = image('headshot.jpg')->url()): ?>
        <div class="section-about__img-container">
            <img src="<?php echo $pic ?>" alt="Adam Rasheed" class="section-about__img">
        </div>
    <?php endif; ?>
        <div class="section-about__content">
            <h3 class="section-about__title">Are you trying to reach a bigger audience online?</h3>
            <p>Hi, I'm Adam Rasheed, a Web Designer who helps Small Businesses like yours with custom websites designed around their business goals.</p>
                <a href="<?php echo $site->page('about')->url() ?>" class="inline-block">Learn How I Can Help <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div><!-- end content -->
</div>
</div>