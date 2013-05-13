<?php snippet('header') ?>

<div id="content" role="main">

  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>

</div>

<?php snippet('footer') ?>