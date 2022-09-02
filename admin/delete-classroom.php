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

  if ($classroom === false) {
    view('not-found');
    die();
  }

  $view_bag = [
    'title' => "Deleting $classroom->name",
    'heading' => "Delete {$classroom->name}?"
  ];  

  view('admin/delete-classroom', $classroom);
}

if (is_post()) {
  $id = sanitize($_POST['id']);
  
  if (empty($id)) {
    // TODO: display message
  } else {
    Data::delete_classroom($id);
    redirect('../classrooms.php');
  }
}
