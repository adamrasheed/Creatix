<div class="social footer__social">
    <a href="<?php echo $site->socialFacebook() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--facebook fab fa-facebook-f" aria-hidden="true"></i></a>

    <a href="<?php echo $site->socialTwitter() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--twitter fab fa-twitter" aria-hidden="true"></i></a>

    <a href="<?php echo $site->socialLinkedin() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--linkedin fab fa-linkedin-in" aria-hidden="true"></i></a>

    <?php if($site->socialInstagram() != ''): ?>
    <a href="<?php echo $site->socialInstagram() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--instagram fab fa-instagram" aria-hidden="true"></i></a>
	<?php endif ?>

	<?php if($site->socialDribbble() != ''): ?>
    <a href="<?php echo $site->socialDribbble() ?>" class="social-link" target="_blank"><i class="social-link__icon social-link--dribbble fab fa-dribbble" aria-hidden="true"></i></a>
<?php endif ?>
</div>