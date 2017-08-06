<section id="services" class="row section-services">

    <h2 class="section-services__title">Services for Your Business</h2>

    <?php foreach(page('services')->children() as $service): ?>
    <div class="home-service sml lrg--col-4" style="background: linear-gradient(hsla(0, 0%, 100%, 0.89),hsla(0, 0%, 80%, 0.89)),url('<?php echo $service->image()->url() ?>');">

	    <h3 class="home-service__title"><?php echo $service->title() ?></h3>
	    <p class="home-service__body"><?php echo $service->description() ?></p>
	    <a href="<?php echo $pages->find('services')->url() ?>" class="home-service__cta btn btn--secondary">Learn More</a>
    
   </div>
    <?php endforeach ?>

</section>