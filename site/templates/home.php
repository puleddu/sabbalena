<?php snippet('header') ?>

<div class="row">
  <?php snippet('aside') ?>
  <main class="main col" role="main">
    <div class="text introduction">
      <h1 class="section-title"><?php echo $page->title()->html()->widont() ?></h1>
      <?php echo $page->text()->kirbytext()->widont() ?>
    </div>
    <div class="index">
      <h1 class="section-title">Ultime pubblicazioni</h1>
      <ul class="latest">
        <?php
          $items = $site->pages()
                        ->filterBy('intendedTemplate', 'section')
                        ->children()->visible()
                        ->filterBy('featured', '1')
                        ->sortBy('date', 'desc')
                        ->limit(9);
          foreach($items as $item): ?>
        <li class="item">
          <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html()->widont() ?></a>
          <span class="meta-label">
            <em>in</em>
            <a href="<?php echo $item->parent()->url() ?>"><?php echo $item->parent()->title()->html()->widont() ?></a>
          </span>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </main>
</div>

<?php snippet('footer') ?>
