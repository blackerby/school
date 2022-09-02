<?php

session_start();

require('app/app.php');

if (!isset($_GET['room'])) {
  redirect('index.php');
}

$id = $_GET['room'];

$classroom = Data::get_classroom($id);
$blocks = Data::get_classroom_blocks($id);
$free = Data::get_classroom_free_blocks($id);

if ($classroom == false) {
  $view_bag['title'] = "Not Found";
  $view_bag['heading'] = "Not Found";
  view('not-found');
  die();
}

$classroom_name = $classroom->name;

$view_bag = [
  'title' => "Classroom: $classroom_name",
  'heading' => "Classroom: $classroom_name"
];

view('classroom-detail', $classroom, $blocks, $free);
