<?php

session_start();

require('app/app.php');

if (!isset($_GET['teacher'])) {
  redirect('index.php');
}

$id = $_GET['teacher'];

$teacher = Data::get_teacher($id);
$schedule = Data::get_teacher_blocks($id);
$free = Data::get_teacher_free_blocks($id);

if ($teacher == false) {
  $view_bag['title'] = "Not Found";
  $view_bag['heading'] = "Not Found";
  view('not-found');
  die();
}

$view_bag = [
  'title' => "$teacher->first_name $teacher->last_name",
  'heading' => "Detail for $teacher->first_name $teacher->last_name"
];

view('teacher-detail', $teacher, $schedule, $free);
