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
  $teacher_blocks = Data::get_teacher_blocks($id);
  $schedule = array_map(function($block) {
    return $block->block_id;
  }, $teacher_blocks);

  if ($teacher == null) {
    view('not-found');
    die();
  }

  $view_bag = [
    'title' => "Editing $teacher->first_name $teacher->last_name",
    'heading' => "Edit $teacher->first_name $teacher->last_name"
  ];  

  view('admin/edit-teacher', $teacher, $schedule);
}

// firstname, lastname, department, schedule[]
if (is_post()) {
  $firstname = sanitize($_POST['firstname']);
  $lastname = sanitize($_POST['lastname']);
  $department = sanitize($_POST['department']);
  $teacher_id= sanitize($_POST['id']);

  if (empty($firstname) || empty($lastname) || empty($department) || empty($teacher_id)) {
    // TODO: display message
  } else {
    Data::update_teacher($teacher_id, $firstname, $lastname, $department);
  }

  $schedule = array_map(function($block) {
    return (int) sanitize($block);
  }, $_POST['schedule']);

  // TODO: Figure out how to do this without dropping all teacher blocks

  Data::delete_teacher_blocks($teacher_id);

  foreach ($schedule as $block) {
    Data::add_teacher_block($teacher_id, $block);
  }

  redirect('index.php');
}
