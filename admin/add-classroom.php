<?php 

session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_post()) {
  $name = sanitize($_POST['name']);

  if (empty($name)) {
    // TODO: display message
  } else {
    Data::add_classroom($name);
  }
  redirect('../classrooms.php');
}

$view_bag = [
  'title' => 'Add a New Classroom',
  'heading' => 'Add a New Classroom'
];

view('admin/add-classroom');
