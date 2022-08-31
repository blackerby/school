<?php

session_start();

require('app/app.php');

$view_bag = [
  'title' => 'Home',
  'heading' => 'Home'
];

redirect('teachers.php');

// view('index');
