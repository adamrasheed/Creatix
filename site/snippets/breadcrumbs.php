<nav class="breadcrumb <?= isset($class)? $class: '';  ?> role="navigation">

    <ul class="breadcrumb__list">
    
    <?php $breadcrumbs = $site->breadcrumb() ?>
    
    <?php foreach($breadcrumbs as $crumb): ?>
        <li class="breadcrumb__item">
            <a class="breadcrumb__link" href="<?php echo $crumb->url() ?>">
                <?= html($crumb->title()) ?>
            </a>
        </li>
        
    <?php endforeach ?>
    
    <?php $length = count($site->breadcrumb()) ?>
    </ul>

</nav>