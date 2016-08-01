<?php snippet('header') ?>

<div class="row">
  <?php snippet('aside') ?>
  <main class="main col" role="main">
    <div class="text introduction">
      <h1 class="section-title"><?php echo $page->title()->html()->widont() ?></h1>
      <?php echo $page->text()->kirbytext()->widont() ?>
    </div>
    <div class="index">
      <h1 class="section-title">Galleria</h1>
      <div class="photo-index row">
        <?php
          $items = $page->children()->visible();
          foreach($items as $item): ?>
        <div class="photo col">
          <a href="<?php echo $item->url() ?>">
            <div class="image-container">
              <img src="<?php echo $item->photo()->toFile()->crop(600, 400, 90)->url() ?>" alt="<?php echo $item->title() ?>">
            </div>
          </a>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>
</div>

<?php snippet('footer') ?>
