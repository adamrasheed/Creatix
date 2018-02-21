<footer class="footer" role="contentinfo">

    <hr class="footer-banner">

    <div class="footer container--flex">
        <div class="footer__links footer-links sml med--col-5 lrg--col-8">

              <ul class="footer-links__list">
                  <li class="footer-links__list-item"><a href="http://bit.ly/crtxNCDomain" class="footer-link" target="_blank">Web Domains</a></li>
                  <li class="footer-links__list-item"><a href="http://bit.ly/creatixbluehost" class="footer-link" target="_blank">Web Hosting</a></li>
                  <li class="footer-links__list-item"><a href="<?= $pages->find('roadmapping-session')->url() ?>" class="footer-link">Roadmapping Session</a></li>
                  <li class="footer-links__list-item"><a href="<?= $pages->find('partnerships')->url() ?>" class="footer-link"><?= $pages->find('partnerships')->title() ?></a></li>
                  
                  <!-- TO DO
                  <li class="footer-links__list-item"><a href="" class="footer-link">Agencies</a></li>
                  <li class="footer-links__list-item"><a href="" class="footer-link">Orange County Web Design</a></li>
                  <li class="footer-links__list-item"><a href="" class="footer-link">Photography</a></li>
                  -->
              </ul>

              <ul class="footer-links__bottom-list">
                  <li class="footer-links__bottom-item--full"><?php echo $site->copyright()->kirbytextRaw() ?></li>
                  <li class="footer-links__bottom-item"><a href="" class="footer-link--bottom">Privacy Policy</a></li>
                  <li class="footer-links__bottom-item"><a href="" class="footer-link--bottom">Terms of Use</a></li>
              </ul>

          </div><!-- end footer-links-->
  
        <div class="footer__contact sml med--col-3 lrg--col-3 lrg--offset-1">
            <?php if ($page->id() != 'contact'): ?>
            <a href="<?= $site->page('contact')->url()  ?>" class="footer__cta btn btn--secondary btn--full cta">Get in Touch</a>
            <?php endif; ?>
              
            <?php snippet('social') ?>
        </div>
          
    </div><!-- end .container-->

</footer>
  
  <!-- Analytics -->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-40235547-1', 'auto');
      ga('send', 'pageview');

    </script>

  <!-- Scripts -->

  <!-- Custom JS -->
  <?php echo js('assets/js/min/main-min.js') ?>
  
</div><!-- end body wrapper -->
</body>
</html>