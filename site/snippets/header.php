<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  
  <?php echo css('assets/stylesheets/normalize.css') ?>
  <?php echo css('assets/stylesheets/app.css') ?>
  
  <?php echo js('javascripts/vendor/custom.modernizr.js') ?>

</head>

<body>

<div class="menu">
  <?php snippet('menu') ?>

  <a href="http://getkirby.com" class="madewith">Made with Kirby and <em>&#9829;</em></a>
</div>