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
            <li class="toggle-topbar"><a href="#"></a></li>
        </ul>
        <section>
            <ul class="left">
                <li class="divider"></li>
                <li><a href="/post/">Home</a></li>
                <?php foreach($pages->visible() AS $p): ?>

                <?php if ($p->hasChildren() && $p->template() != 'blog'){ ?>
                    <li class="has-dropdown"><a href="<?php echo $p->url(); ?>"><?php echo html($p->title()); ?></a>
                        <ul class="dropdown">
                            <?php foreach($p->children() AS $c): ?>
                            <li><a href="<?php echo $c->url(); ?>"><?php echo html($c->title()); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <?php } else{ ?>

                    <li><a href="<?php echo $p->url() ?>"><?php echo html($p->title()); ?></a></li>

                    <?php } ?>

                <?php endforeach; ?>
            </ul>
        </section>
    </nav>

</div>