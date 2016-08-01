<?php snippet('header') ?>

<div class="row">
  <?php snippet('aside') ?>
  <main class="main col" role="main">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php if($page->date_hidden()->isFalse()): ?>
    <div class="meta-label">
      <?php echo $page->date('d/m/Y') ?>
    </div>
    <?php endif; ?>
    <?php if ($page->intendedTemplate() == 'fotografia'): ?>
      <div class="photo zoomable" data-image="<?php echo $page->photo()->toFile()->url() ?>">
        <div class="image-container">
          <img src="<?php echo $page->photo()->toFile()->url() ?>" alt="<?php echo $page->title() ?>" />
        </div>
      </div>
    <?php endif; ?>
    <div class="text">
      <?php echo $page->text()->kirbytext()->widont() ?>
    </div>
    <?php
     $attachments = $page->files()->filterBy('visibility', '1');
     if ($attachments->count()): ?>
    <div class="attachments">
      <h2 class="section-title">Allegati</h2>
      <ul class="attachment-list">
        <?php foreach($attachments as $attachment): ?>
          <li>
            <a href="<?php echo $attachment->url() ?>">
              <span class="attachment-name"><?php echo $attachment->filename() ?></span>
              <span class="attachment-size">(<?php echo $attachment->niceSize() ?>)</span>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endif; ?>
  </main>
</div>

<?php snippet('footer') ?>
