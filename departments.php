<?php

session_start();

require('app/app.php');

$view_bag = [
  'title' => 'Departments',
  'heading' => 'All Departments'
];


$departments = Data::get_departments();

view('departments', $departments);
