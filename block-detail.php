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
$block_rooms = Data::get_block_classrooms($id);
$occupied_rooms = array_map(function($block_room) {
  return Data::get_classroom($block_room->classroom_id);
}, $block_rooms);
$free_rooms = Data::get_block_free_classrooms($id);

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

view('block-detail', $block, $teaching, $free, $occupied_rooms, $free_rooms);
