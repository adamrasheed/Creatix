<?php snippet('header/header-hero') ?>

<!-- Hero -->
<?php snippet('home/hero') ?>

  <main class="main" role="main">

    <!-- about section -->
    <section class="section-about" id="about">
      <?php snippet('home/about'); ?>
    </section>

	<?php snippet('home/case-studies'); ?>

    <!-- AV testimonial -->
    <?php $tst = $pages->find('testimonials/aaron-valenty');?>

    <section class=" section-testimonial row">
        <div class="testimonial__container sml med--col-6 med--offset-1 lrg--col-8 lrg--offset-2">
            <div class="testimonial__body"><?= $tst->body()->kt(); ?></div>

            <?php if($tst->image() != ''): ?>
                <?php if($tst->link() != ''): ?>
                    <a href="<?= $tst->link() ?>" class="testimonial__client-link" target="_blank">
                        <img src="<?= $tst->image()->url(); ?>" alt="" class="testimonial__image">
                    </a>
                <?php else: ?>
                    <img src="<?= $tst->image()->url(); ?>" alt="" class="testimonial__image">
                <?php endif; ?>
            <?php endif ?>

        
            <div class="testimonial__client">
                
                    <h5 class="testimonial__client-name">
                        <?php if($tst->link() != ''): ?>
                            <a href="<?= $tst->link() ?>" class="testimonial__client-link" target="_blank">
                                <?= $tst->title(); ?>
                            </a>
                        <?php else: ?>
                            <?= $tst->title(); ?>
                    </h5>

                <?php endif ?>
            </div>
    </section>

    
    <?php snippet('optin') ?>
    
    <?php snippet('home/services') ?>
    
    <?php snippet('home/blog') ?>
    
    <section class="home-CTA">

        <div class="final-CTA">
            <h3 class="center final-CTA__title white">Ready to Get Started?</h3>
            <a href="<?php echo $pages->find('roadmapping-session')->url() ?>" class="final-CTA__btn cta btn btn--primary">Schedule a Roadmapping Session</a>
            <p class="center white">Not Ready yet? Check out some <a href="<?php echo $pages->find('case-studies')->url() ?>">Case Studies</a></p>
        </div>
        
    </section>


  </main>

<?php snippet('footer') ?>