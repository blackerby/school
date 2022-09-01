<?php 

session_start();

require('../app/app.php');

ensure_user_is_authenticated();

$departments = Data::get_departments();

if (is_post()) {
  $firstname = sanitize($_POST['firstname']);
  $lastname = sanitize($_POST['lastname']);
  $department = sanitize($_POST['department']);
  $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
  $schedule = array_map(function($block) {
    return sanitize($block);
  }, $_POST['schedule']);

  if (empty($firstname) || empty($lastname) || empty($department)) {
    // TODO: display message
  } else {
    Data::add_teacher($firstname, $lastname, $department, $email);
  }

  if (!empty($schedule)) {
    $teacher = Data::get_teacher_by_name_and_department($firstname, $lastname, $department);
    foreach ($schedule as $block) {
      Data::add_teacher_block($teacher->id, $block);
    }
  }
  redirect('index.php');
}

$view_bag = [
  'title' => 'Add a New Teacher',
  'heading' => 'Add a New Teacher'
];

view('admin/add-teacher', $departments);
