<?php

session_start();

require('app/app.php');

if (!isset($_GET['block'])) {
  redirect('index.php');
}

$id = $_GET['block'];

$block = Data::get_block($id);
$block_teachers = Data::get_block_teachers($id);
$teaching = array_map(function($block_teacher){
  return Data::get_teacher($block_teacher->teacher_id);
}, $block_teachers);
$free = Data::get_block_free_teachers($id);

if ($block == false) {
  $view_bag['title'] = "Not Found";
  $view_bag['heading'] = "Not Found";
  view('not-found');
  die();
}

$view_bag = [
  'title' => "$block->name Block",
  'heading' => "Detail for $block->name Block"
];

view('block-detail', $block, $teaching, $free);
