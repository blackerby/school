<?php 

session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_get()) {
  $teacher = sanitize($_GET['teacher']);

  if (empty($teacher)) {
    view('not-found');
    die();
  }

  $id = $_GET['teacher'];
  
  $teacher = Data::get_teacher($id);  

  if ($teacher === false) {
    view('not-found');
    die();
  }

  $view_bag = [
    'title' => "Deleting $teacher->first_name $teacher->last_name",
    'heading' => "Delete {$teacher->first_name} {$teacher->last_name}?"
  ];  

  view('admin/delete-teacher', $teacher);
}

// firstname, lastname, department, schedule[]
if (is_post()) {
  $id = sanitize($_POST['id']);
  
  if (empty($id)) {
    // TODO: display message
  } else {
    Data::delete_teacher($id);
    redirect('index.php');
  }
}
