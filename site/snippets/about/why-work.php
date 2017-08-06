<div class="row wwm">
    <h2 class="title--flex wwm__title"><?php  echo $page->workwithmeTitle() ?></h2>
    <p class="title--flex wwm__subtitle"><?php  echo $page->wwmSubtitle() ?></p>
    
    <div class="sml med--col-4 lrg--col-6 wwm__text">
        <?php  echo $page->wwmText()->kt() ?>
    </div>
    
    <div class="sml med--col-4 lrg--col-6 wwm__media">
        <img src="<?php echo $page->image($page->wwmImg())->url() ?>" alt="" class="wwm__img">
    </div>
</div>