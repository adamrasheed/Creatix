<div class="row row--center">
    <div class="section-about sml med--col-6 med--offset-1 lrg--col-8">
    <?php if($pic = image('headshot.jpg')->url()): ?>
        <img src="<?php echo $pic ?>" alt="Adam Rasheed" class="section-about__img">
    <?php endif; ?>
        <div class="section-about__content">
            <h3>Are you trying to reach a bigger audience online?</h3>
            <p>Hi, I'm Adam Rasheed, a Web Designer who helps Small Businesses like yours with custom websites designed around their business goals.</p>
                <a href="<?php echo $site->page('about')->url() ?>" class="inline-block">Learn How I Can Help <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div><!-- end content -->
</div>
</div>