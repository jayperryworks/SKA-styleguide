<?php snippet('header') ?>

<div id="content" role="main">

  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>

  <footer>
		<p>&copy; Copyright 2013 The SK&amp;A Group</p>
	</footer>

</div>

<?php snippet('footer') ?>