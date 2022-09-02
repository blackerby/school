<?php

function view($name, $model = '', $data = '', $free = '', $or = '', $fr = '') {
  global $view_bag;
  require(APP_PATH . "views/layout.view.php");
}

function redirect($url) {
  header("Location: {$url}");
  die();
}

function is_post() {
  return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_get() {
  return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function sanitize($value) {
  $temp = filter_var(trim($value), FILTER_SANITIZE_STRING);

  if ($temp === false) {
    return '';
  }
  return $temp;
}

function sanitize_email($value) {
  $temp = filter_var(trim($value), FILTER_SANITIZE_EMAIL);

  if ($temp === false) {
    return '';
  }
  return $temp;
}

function authenticate_user($email, $password) {
  $users = CONFIG['users'];

  if (!isset($users[$email])) {
    return false;
  }

  $user_password = $users[$email];
  return $password == $user_password;
}

function is_user_authenticated() {
  return isset($_SESSION['email']);
}

function ensure_user_is_authenticated() {
  if (!is_user_authenticated()) {
    redirect('../login.php');
    die();
  }
}

function get_department($id) {
  $departments = [
    1 => "English",
    2 => "History",
    3 => "Math",
    4 => "Science",
    5 => "Fine Arts",
    6 => "Modern & Classical Languages",
    7 => "Physical Education",
    8 => "Computer Science"
  ];

    return $departments[$id];
}

function get_block($id) {
  $blocks = [
    1 => 'A',
    3 => 'B',
    4 => 'C',
    5 => 'D',
    6 => 'E',
    7 => 'F',
    8 => 'G'
  ];

  return $blocks[$id];
}
