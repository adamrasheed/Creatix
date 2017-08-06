<?php snippet('header/header') ?>

  <main class="main main__about" role="main">

    <!--About Intro-->
    <div class="row">
        <?php snippet('breadcrumbs'); ?>
        <h1 class="title--flex"><?php echo $page->title() ?></h1>
        <div class="author-info sml med--col-4 lrg--col-4">
            <img src="<?php echo $site->image($site->authorImg())->url() ?>" alt="" class="author-info__img">
            <h4 class="center author-info__name">
                <?php echo $site->author() ?>
            </h4>
            
            <div class="author-info__links">
                <h5 class="center author-info__email">
                    <a href="" class="author-info__link">
                        <?php echo $site->authorEmail() ?>
                    </a>
                </h5>
                
                <h5 class="center author-info__phone">
                    <a href="" class="author-info__link">
                        <?php echo $site->authorPhone()->kt() ?>
                    </a>
                </h5>
            </div>
            <div class="author-info__social">
                <?php snippet('social') ?>
            </div>
        </div>
        
        <div class="about-description sml med--col-4 lrg--col-4">
            <?php echo $page->description()->kt() ?>
        </div>
        
        <div class="about-proof sml med--col-8 lrg--col-4">
            <div class="about-clients">
                <h4 class="about__list-heading">Clients</h4>
                <?php echo $page->clients()->kt() ?>
            </div>
            <div class="about-featured">
                <h4 class="about__list-heading">Featured In</h4>
                <?php echo $page->featured()->kt() ?>
            </div>
        </div>
        
    </div><!-- end row -->
    
    <!-- Optin -->
    <?php snippet('optin') ?>
    
    <!-- Why Work with Me -->
    

    <!-- Testimonial -->
    <!-- La Buena testimonial -->
    <?php $tst = $pages->find('testimonials/raid-sara');?>

    <section class=" section-testimonial row">
        <div class="testimonial__container sml med--col-6 med--offset-1 lrg--col-8 lrg--offset-2">
            <div class="testimonial__body"><?= $tst->body()->kt(); ?></div>

            <?php if($tst->image() != ''): ?>
                <img src="<?= $tst->image()->url(); ?>" alt="" class="testimonial__image">
            <?php endif ?>
        
            <div class="testimonial__client">
                <h5 class="testimonial__client-name"><?= $tst->title(); ?></h5>
                
                <h5 class="testimonial__client-site">La Buena Market
                </h5>
        </div>
    </section>
    
    <!-- Suggested Articles -->
    <?php snippet('header'); ?>
    
    <!-- Latest Articles -->
    <div class="row about-posts">
        <h2 class="title--flex">Latest Articles</h2>

        <div class="about-posts__posts sml med--col-5 lrg--col-8">

            <?php foreach(page('blog')->children()->limit(2) as $article): ?>

            <div class="post-preview">
                <a class="post-preview__link" href="<?php echo $article->url() ?>">
                    
                    <?php if($image = $article->image($article->coverimage())): ?>
                        <img src="<?php echo $image->url() ?>" alt="" class="post-preview__img">
                    <?php endif ?>
                    
                    <div class="post-preview__overlay"></div>
                    <h3 class="post-preview__title"><?php echo $article->title()->html() ?></h3>

                </a>
            </div>

            <?php endforeach ?>
        </div><!-- end about-posts -->


        <div class="sml med--col-3 lrg--col-4">
            <?php snippet('widgets/roadmapping'); ?>
            
            <!-- Resources Widget -->
            <?php snippet('widgets/resources'); ?>
        </div>
        
    </div>
    
    <!-- CTA -->
    <div class="row">
        <div class="about-cta sml med--col-6 med--offset-1 lrg--col-6 lrg--offset-3">
            <h4 class="about-cta__title center">Ready to Create Results for Your Business?</h4>
            <a href="<?= $pages->find('roadmapping-session')->url() ?>" class="cta btn btn--primary">Schedule a Roadmapping Session</a>
            <p class="center">Not Ready yet? Check out some <a href="<?php echo $pages->find('case-studies')->url() ?>">Case Studies</a></p>
        </div>
    </div>
    
    <!--About this Site-->
    <div class="about-site container padding">
        <h5 class="about-site__heading">About this Site</h5>
        <?php echo $page->aboutSite()->kt() ?>
    </div>
  </main>

<?php snippet('footer') ?>