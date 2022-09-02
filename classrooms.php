<?php

session_start();

require('app/app.php');

$view_bag = [
  'title' => 'Classrooms',
  'heading' => 'All Classrooms'
];


if (isset($_GET['search'])) {
  $view_bag['heading'] = "Results for {$_GET['search']}";
  $classrooms = Data::search_classrooms($_GET['search']);
} else {
  $classrooms = Data::get_classrooms();
}

view('classrooms', $classrooms);
