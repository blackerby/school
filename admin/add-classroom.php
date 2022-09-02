<?php 

session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_post()) {
  $name = sanitize($_POST['name']);
  $schedule = array_map(function($block) {
    return sanitize($block);
  }, $_POST['schedule']);

  if (empty($name)) {
    // TODO: display message
  } else {
    Data::add_classroom($name);
  }

  if (!empty($schedule)) {
    $classroom = Data::get_classroom_by_name($name);
    foreach ($schedule as $block) {
      Data::add_classroom_block($classroom->id, $block);
    }
  }

  redirect('../classrooms.php');
}

$view_bag = [
  'title' => 'Add a New Classroom',
  'heading' => 'Add a New Classroom'
];

view('admin/add-classroom');
