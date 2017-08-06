<?php if($site->page('resources')->isVisible()): ?>
	<div class="widget widget-cta--secondary">
	    <h4 class="widget__title">Resources</h4>
	    <p class="widget__text">Get my hand-selected collection of resources that will jumpstart your online marketing today.</p>
	    <a href="<?php echo page('resources')->url(); ?>" class="widget__cta btn btn--secondary">Resources</a>
	</div>
<?php else: ?>
    <!-- Widget ConvertKit -->
    <?php snippet('widgets/aff-convertkit'); ?>
<?php endif ?>