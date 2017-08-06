<?php snippet('header/header'); ?>

	<main class="main" role="main">

		<div class="row">
			<?php snippet('breadcrumbs'); ?>
    		<h1 class="title--flex"><?php echo $page->title()->html() ?></h1>
		</div>



			<?php foreach (page('services')->children()  as $service): ?>

				<div class="service row">
					<div class="service__info sml med--col-4 lrg--col-6">
						<h2 class="service_title"><?php echo $service->title() ?></h2>
						<div class="service__text"><?php echo $service->text()->kt() ?></div>
					</div>

					<img src="<?php echo $service->image()->url() ?>" alt="" class="service__img sml med--col-4 lrg--col-6">
				</div>

			<?php endforeach ?>

	</main>


<?php snippet('footer') ?>