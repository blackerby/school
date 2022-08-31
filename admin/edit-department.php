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
  
  if ($department == null) {
    view('not-found');
    die();
  }

  $view_bag = [
    'title' => "Editing $department->name",
    'heading' => "Edit $department->name"
  ];  

  view('admin/edit-department', $department);
}

// firstname, lastname, department, schedule[]
if (is_post()) {
  $name = sanitize($_POST['name']);
  $id = sanitize($_POST['id']);

  if (empty($name) || empty($id)) {
    // TODO: display message
  } else {
    Data::update_department($id, $name);
  }

  redirect('../departments.php');
}
