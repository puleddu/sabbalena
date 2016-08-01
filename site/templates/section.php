<?php snippet('header') ?>

<div class="row">
  <?php snippet('aside') ?>
  <main class="main col" role="main">
    <div class="text introduction">
      <h1 class="section-title"><?php echo $page->title()->html()->widont() ?></h1>
      <?php echo $page->text()->kirbytext()->widont() ?>
    </div>
    <div class="index">
      <h1 class="section-title">Indice</h1>
      <ul class="latest">
        <?php
          $items = $page->children()
                        ->visible()
                        ->sortBy('date_hidden', 'asc', 'date', 'desc');
          foreach($items as $item): ?>
        <li class="item">
          <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html()->widont() ?></a>
          <?php if($item->date_hidden()->isFalse()): ?>
          <span class="meta-label"><?php echo $item->date('d/m/Y') ?></span>
          <?php endif; ?>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </main>
</div>

<?php snippet('footer') ?>
