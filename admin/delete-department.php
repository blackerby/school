<?php 

session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_get()) {
  $id = sanitize($_GET['dept']);

  if (empty($id)) {
    view('not-found');
    die();
  }
  
  $department = Data::get_department($id);  

  if ($department === false) {
    view('not-found');
    die();
  }

  $view_bag = [
    'title' => "Deleting $department->name",
    'heading' => "Delete {$department->name}?"
  ];  

  view('admin/delete-department', $department);
}

// firstname, lastname, department, schedule[]
if (is_post()) {
  $id = sanitize($_POST['id']);
  
  if (empty($id)) {
    // TODO: display message
  } else {
    Data::delete_department($id);
    redirect('../departments.php');
  }
}
