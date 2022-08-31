<?php

session_start();

require('app/app.php');

$view_bag = [
  'title' => 'Teachers',
  'heading' => 'All Teachers'
];


if (isset($_GET['search'])) {
  $view_bag['heading'] = "Results for {$_GET['search']}";
  $teachers = Data::search_teachers($_GET['search']);
} else {
  $teachers = Data::get_teachers();
}

view('teachers', $teachers);
