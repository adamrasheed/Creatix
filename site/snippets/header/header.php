<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <?php snippet('header/head'); ?>
<body>
<div class="body-wrapper">

<?php // not using sticky nav right now // snippet('header/header-nav-sticky'); ?>
<?php snippet('header/header-nav'); ?>
<?php snippet('header/mob-nav'); ?>
