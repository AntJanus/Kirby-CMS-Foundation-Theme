<?php snippet('header') ?>

<div class="row" id="main-content">
<section class="eight columns" id="content-area">
<h2><?= $page->title() ?></h2>
	<?= kirbytext($page->text()) ?>
</section>
<aside class="four columns" id="sidebar">
<?= snippet('sidebar') ?>
</aside>
</div>

<?php snippet('footer') ?>