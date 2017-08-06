<div class="social footer__social">
    <a href="<?php echo $site->socialFacebook() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--facebook fa fa-facebook" aria-hidden="true"></i></a>

    <a href="<?php echo $site->socialTwitter() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--twitter fa fa-twitter" aria-hidden="true"></i></a>

    <a href="<?php echo $site->socialLinkedin() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--linkedin fa fa-linkedin" aria-hidden="true"></i></a>

    <?php if($site->socialInstagram() != ''): ?>
    <a href="<?php echo $site->socialInstagram() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--instagram fa fa-instagram" aria-hidden="true"></i></a>
	<?php endif ?>

	<?php if($site->socialDribbble() != ''): ?>
    <a href="<?php echo $site->socialDribbble() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--dribbble fa fa-dribbble" aria-hidden="true"></i></a>
<?php endif ?>
</div>