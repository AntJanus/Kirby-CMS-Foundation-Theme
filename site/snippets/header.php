<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?= html($page->title()) ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<?= css('/assets/stylesheets/app.css') ?>
	<?= css('/assets/stylesheets/foundation.css') ?>
	<?= js('/assets/javascripts/foundation.min.js') ?>
	<?= js('/assets/javascripts/app.js') ?>
<link rel="alternate" type="application/rss+xml" href="<?php echo url('rss') ?>" title="Blog Feed" />

</head>

<body>
	
<div class="contain-to-grid">
<nav class="top-bar">
  <ul> 
<li class="name"><h1><a href="<?= url() ?>"><?= html($site->title()) ?></a></h1></li>
  </ul>
<section>
<ul class="left">
    <li class="divider"></li>
<li><a href="/post/">Home</a></li>
    <?php foreach($pages->visible() AS $p): ?>
    <li><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
</ul>
</nav>
</section>
</div>