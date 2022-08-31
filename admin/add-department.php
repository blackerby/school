<?php 

session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_post()) {
  $name = sanitize($_POST['name']);

  if (empty($name)) {
    // TODO: display message
  } else {
    Data::add_department($name);
  }
  redirect('../departments.php');
}

$view_bag = [
  'title' => 'Add a New Department',
  'heading' => 'Add a New Department'
];

view('admin/add-department');
