<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="coverimage-figure">
    <img src="<?= $image->url() ?>" alt="" />
  </figure>
<?php endif ?>