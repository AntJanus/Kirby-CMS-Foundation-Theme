<div class="widget first-widget"><p><img src="http://antjan.us/post/assets/images/author.jpg" class="author-image" width="50px" height="50px" alt="Author Image"> <?= $site->biography ?></p></div>
<hr />
<div class="widget">
  <h5 class="subheader">Subscribe To My Newsletter</h5>
  <form>
    <div class="row collapse">
      <div class="eight mobile-three columns">
        <input type="text">
      </div>
      <div class="four mobile-one columns">
        <a class="button expand postfix">Subscribe</a>
      </div>
    </div>
  </form>
</div>
<hr />
<div class="widget">
<h5 class="subheader">Recent Articles</h5>
 <?php foreach($pages->find('blog')->children()->visible()->flip()->paginate(5) as $article): ?>
<h6><a href="<?= $article->url() ?>"><?= html($article->title()) ?></a></h6>
<?php endforeach ?>
</div>
<hr />
<div class="widget">
  <h5 class="subheader">Ads</h5>
  <div class="row">
    <div class="six columns">
      <div class="panel">
        Advertisement
      </div>
    </div>
    <div class="six columns">
      <div class="panel">
        Advertisement
      </div>
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <div class="panel">
        Advertisement
      </div>
    </div>
    <div class="six columns">
      <div class="panel">
        Advertisement
      </div>
    </div>
  </div>
</div>