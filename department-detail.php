<?php

session_start();

require('app/app.php');

if (!isset($_GET['dept'])) {
  redirect('index.php');
}

$id = $_GET['dept'];

$department = Data::get_department($id);
$teachers = Data::get_teachers_by_department($id);

if ($department == false) {
  $view_bag['title'] = "Not Found";
  $view_bag['heading'] = "Not Found";
  view('not-found');
  die();
}

$department_name = ucwords($department->name);

$view_bag = [
  'title' => "$department_name Department",
  'heading' => "Members of the $department_name Department"
];

view('department-detail', $department, $teachers);
