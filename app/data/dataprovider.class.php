<?php

require('teacher.class.php');
require('block.class.php');
require('teacherblock.class.php');
require('department.class.php');

class DataProvider
{

  function __construct($source) {
    $this->source = $source;
  }
  
  public function get_teachers() {
    
  }
  
  public function get_teacher($id) {
    
  }
  
  public function search_teachers($search) {
   
  }
  
  public function add_teacher($firstname, $lastname, $department) {
   
  }
  
  public function update_teacher($teacher_id, $firstname, $lastname, $department) {
    
  }
  
  public function delete_teacher($id) {
    
  }
  
}
