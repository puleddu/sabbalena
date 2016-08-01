<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="shortcut icon" href="/assets/images/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,400i,500,500i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.5.1/katex.min.css">
  <?php echo css('assets/vendor/plyr/plyr.css') ?>
  <?php echo css('assets/css/main.css') ?>
</head>
<body>
  <div class="container">
