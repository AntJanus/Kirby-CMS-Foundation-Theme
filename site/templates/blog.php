<?php snippet('header') ?>

<div class="row" id="main-content">
<section class="eight columns" id="content-area">
<h2><?= $page->title() ?></h2>
	<?= kirbytext($page->text()) ?>
 <?php foreach($page->children()->visible()->flip()->paginate(10) as $article): ?>
  
  <article>
    <h3><a href="<?= $article->url() ?>"><?= html($article->title()) ?></a></h3>
    <p><?= excerpt($article->text(), 200) ?></p>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>
</section>
<aside class="four columns" id="sidebar">
<?= snippet('sidebar') ?>
</aside>
</div>

<?php snippet('footer') ?>