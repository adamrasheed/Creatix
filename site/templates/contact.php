<?php snippet('header/header') ?>

  <main class="main main--default" role="main">

    <div class="container">
      <?php snippet('breadcrumbs'); ?>
      <h1 class="title--flex"><?= $page->title()->html() ?></h1>
    </div>

    <div class="row">
    	<div class="sml med--col-6 lrg--col-4">
			<p><strong>email: </strong><a href="mailto:<?= $site->authorEmail(); ?>" target="_blank"><?= $site->authorEmail(); ?></a></p>
		</div>
    </div>

    <div class="row text">
    	<div class="sml med--col-4 lrg--col-4">
    		<?= $page->text()->kirbytext() ?>
    		<link href="//static.cushionapp.com/availability.css" rel="stylesheet">
            <script src="//static.cushionapp.com/availability.js"
              data-user="f8a9b517-eb9c-48b3-bc4a-79ebda2d8309"></script>
              
              <h3>I'm currently <span data-availability-badge></span></h3>
    		<a
                class="typeform-share link btn btn--primary"
                href="https://adamrasheed.typeform.com/to/YAwXD0"
                data-mode="drawer_right" 
              >
      	<?php if($page->cta() != ''): ?>
      		<?php echo $page->cta() ?>
      	<?php else: ?>
      		submit
      	<?php endif ?>
      </a> 

      <script> (function() { var qs, js, q, s, d = document, gi = d.getElementById, ce = d.createElement, gt = d.getElementsByTagName, id = "typef_orm_share", b = "https://s3-eu-west-1.amazonaws.com/share.typeform.com/"; if (!gi.call(d, id)) { js = ce.call(d, "script"); js.id = id; js.src = b + "share.js"; q = gt.call(d, "script")[0]; q.parentNode.insertBefore(js, q) } })() </script>
    	</div>
    </div>


  </main>

<?php snippet('footer') ?>