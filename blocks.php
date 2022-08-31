<?php

session_start();

require('app/app.php');

$view_bag = [
  'title' => 'Blocks',
  'heading' => 'All Blocks'
];

$blocks = Data::get_blocks();

view('blocks', $blocks);
