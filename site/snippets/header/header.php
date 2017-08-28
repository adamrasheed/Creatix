<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <?php snippet('header/head'); ?>
<body>

<?php snippet('header/mob-nav'); ?>

<div id="wrapper" class="body-wrapper">
<?php // not using sticky nav right now // snippet('header/header-nav-sticky'); ?>
<?php snippet('header/header-nav'); ?>
<?php snippet('back-to-top'); ?>
