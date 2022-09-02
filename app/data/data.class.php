<?php

require('dataprovider.class.php');

class Data
{
  static private $ds;
  
  static public function initialize(DataProvider $data_provider) {
    return self::$ds = $data_provider;
  }
  
  static public function get_teachers() {
    return self::$ds->get_teachers();
  }

  static public function get_teacher($id) {
    return self::$ds->get_teacher($id);
  }

  static public function search_teachers($search) {
    return self::$ds->search_teachers($search);
  }

  static public function add_teacher($firstname, $lastname, $department, $email) {
    return self::$ds->add_teacher($firstname, $lastname, $department, $email);
  }

  static public function update_teacher($teacher_id, $firstname, $lastname, $department, $email) {
    return self::$ds->update_teacher($teacher_id, $firstname, $lastname, $department, $email);
  }

  static public function delete_teacher($id) {
    return self::$ds->delete_teacher($id);
  }

  // blocks

  static public function get_blocks() {
    return self::$ds->get_blocks();
  }

  static public function get_block($id) {
    return self::$ds->get_block($id);
  }

  // teacher blocks junction table

  static public function get_teacher_blocks($teacher_id) {
    return self::$ds->get_teacher_blocks($teacher_id);
  }

  static public function get_teacher_free_blocks($teacher_id) {
    return self::$ds->get_teacher_free_blocks($teacher_id);
  }

  static public function get_block_teachers($block_id) {
    return self::$ds->get_block_teachers($block_id);
  }

  static public function get_block_free_teachers($block_id) {
    return self::$ds->get_block_free_teachers($block_id);
  }

  static public function add_teacher_block($teacher_id, $block_id) {
    return self::$ds->add_teacher_block($teacher_id, $block_id);
  }

  static public function get_teacher_by_name_and_department($first_name, $last_name, $department_id) {
    return self::$ds->get_teacher_by_name_and_department($first_name, $last_name, $department_id);
  }

  static public function delete_teacher_blocks($teacher_id) {
    return self::$ds->delete_teacher_blocks($teacher_id);
  }

  static public function get_departments() {
    return self::$ds->get_departments();
  }

  static public function get_department($id) {
    return self::$ds->get_department($id);
  }

  static public function get_teachers_by_department($dept_id) {
    return self::$ds->get_teachers_by_department($dept_id);
  }

  static public function add_department($name) {
    return self::$ds->add_department($name);
  }

  static public function update_department($id, $name) {
    return self::$ds->update_department($id, $name);
  }

  static public function delete_department($id) {
    return self::$ds->delete_department($id);
  }

  static public function get_classrooms() {
    return self::$ds->get_classrooms();
  }
  static public function add_classroom($name) {
    return self::$ds->add_classroom($name);
  }

  static public function get_classroom($id) {
    return self::$ds->get_classroom($id);
  }

  static public function delete_classroom($id) {
    return self::$ds->delete_classroom($id);
  }

  static public function get_classroom_blocks($classroom_id) {
    return self::$ds->get_classroom_blocks($classroom_id);
  }
  
  static public function get_classroom_free_blocks($classroom_id) {
    return self::$ds->get_classroom_free_blocks($classroom_id);
  }

  static public function search_classrooms($search) {
    return self::$ds->search_classrooms($search);
  }

  static public function get_block_classrooms($classroom_id) {
    return self::$ds->get_block_classrooms($classroom_id);
  }

  static public function get_block_free_classrooms($block_id) {
    return self::$ds->get_block_free_classrooms($block_id);
  }

  static public function add_classroom_block($classroom_id, $block_id) {
    return self::$ds->add_classroom_block($classroom_id, $block_id);
  }

  static public function get_classroom_by_name($name) {
    return self::$ds->get_classroom_by_name($name);
  }

  static public function update_classroom($id, $name) {
    return self::$ds->update_classroom($id, $name);
  }

  static public function delete_classroom_blocks($classroom_id) {
    return self::$ds->delete_classroom_blocks($classroom_id);
  }
}
