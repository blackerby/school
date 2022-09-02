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
  $classroom_blocks = Data::get_classroom_blocks($id);
  $schedule = array_map(function($block) {
    return $block->block_id;
  }, $classroom_blocks);
  
  if ($classroom == null) {
    view('not-found');
    die();
  }

  $view_bag = [
    'title' => "Editing Classroom $classroom->name",
    'heading' => "Edit Classroom $classroom->name"
  ];  

  view('admin/edit-classroom', $classroom, $schedule);
}

// firstname, lastname, department, schedule[]
if (is_post()) {
  $name = sanitize($_POST['name']);
  $id = sanitize($_POST['id']);

  if (empty($name) || empty($id)) {
    // TODO: display message
  } else {
    Data::update_classroom($id, $name);
  }

  $schedule = array_map(function($block) {
    return (int) sanitize($block);
  }, $_POST['schedule']);

  Data::delete_classroom_blocks($id);

  foreach ($schedule as $block) {
    Data::add_classroom_block($id, $block);
  }

  redirect('../classrooms.php');
}
