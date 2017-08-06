<nav class="breadcrumb <?php echo isset($class)? $class: '';  ?> role="navigation">

    <ul class="breadcrumb__list">
    
    <?php foreach($site->breadcrumb() as $crumb): ?>
        <li class="breadcrumb__item">
            <a class="breadcrumb__link" href="<?php echo $crumb->url() ?>"><?php echo html($crumb->title()) ?></a>
        </li>
    <?php endforeach ?>
    
    </ul>

</nav>