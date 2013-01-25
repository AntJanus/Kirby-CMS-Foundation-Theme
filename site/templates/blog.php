<?php snippet('header') ?>

<div class="row" id="main-content">
<section class="eight columns" id="content-area">
<h2><?= $page->title() ?></h2>
	<?= kirbytext($page->text()) ?>
<?php
	$pagination = $page->children()->visible()->flip()->paginate(10);
?>
 <?php foreach($pagination as $article): ?>
  <article>
    <h3><a href="<?= $article->url() ?>"><?= html($article->title()) ?></a></h3>
    <p><?= excerpt($article->text(), 200) ?></p>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>
<?php endforeach ?>
  <hr />
  <div class="pagination-centered">
<ul class="pagination">
  <?php if($pagination->hasPrevPage()): ?>
  <li class="arrow">
  <a class="prev" href="<?php echo $pagination->prevPageURL() ?>">&laquo;</a>
  </li>
  <?php else: ?>
  <li class="arrow unavailable">
  <a class="prev" href="<?php echo $pagination->prevPageURL() ?>">&laquo;</a>
  </li>
  <?php endif ?>
  
  <?php if($pagination->countPages() > 1): ?> 
    <?php foreach($pagination->range(5) as $r): ?>
    <li class="<?php echo ($pagination->page() == $r) ? 'unavailable' :  '' ?>" >
	<a class="range" href="<?php echo $pagination->pageURL($r) ?>"><?php echo $pagination->pageURL($r); ?></a>
	</li>
    <?php endforeach ?>
  <?php endif ?>
  
  <?php if($pagination->hasNextPage()): ?>
  <li class="arrow">
  <a class="next" href="<?php echo $pagination->nextPageURL() ?>">&raquo;</a>
  </li>
  <?php else: ?>
  <li class="arrow unavailable">
  <a class="next" href="<?php echo $pagination->nextPageURL() ?>">&raquo;</a>
  </li>
  <?php endif ?>
</ul>
</div>
</section>
<aside class="four columns" id="sidebar">
<?= snippet('sidebar') ?>
</aside>
</div>

<?php snippet('footer') ?>