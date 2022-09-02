<?php 

session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_get()) {
  $id = sanitize($_GET['room']);

  if (empty($id)) {
    view('not-found');
    die();
  }
  
  $classroom = Data::get_classroom($id);
  
  if ($classroom == null) {
    view('not-found');
    die();
  }

  $view_bag = [
    'title' => "Editing Classroom $classroom->name",
    'heading' => "Edit Classroom $classroom->name"
  ];  

  view('admin/edit-classroom', $classroom);
}

// firstname, lastname, department, schedule[]
if (is_post()) {
  $name = sanitize($_POST['room']);
  $id = sanitize($_POST['id']);

  if (empty($name) || empty($id)) {
    // TODO: display message
  } else {
    Data::update_classroom($id, $name);
  }

  redirect('../classrooms.php');
}
