<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  
  <?php echo css('assets/stylesheets/normalize.css') ?>
  <?php echo css('assets/stylesheets/app.css') ?>
  
  <?php echo js('assets/javascripts/vendor/custom.modernizr.js') ?>

</head>

<body>

<div id="wrapper">

  <aside id="menu" role="navigation">
    <!-- client's logo -->
    <a href="<?php echo url() ?>" id="brand">
      <img src="assets/images/ska-group-logo.png" alt="The SK&amp;A Group" />
    </a>
    
    <!-- main menu -->
    <?php snippet('menu') ?>
    
    <!-- JPW signoff -->
    <a href="http://jayperryworks.com" class="madewith">Jay Perry Works</a>
  </aside>