<?php

kirbytext::$tags['audio'] = array(
    'html' => function($tag) {
      $audio = $tag->file($tag->attr('audio'));
      return snippet('audio', array('audio' => $audio), true);
    }
);
