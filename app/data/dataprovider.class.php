<?php

require('teacher.class.php');
require('block.class.php');
require('teacherblock.class.php');
require('department.class.php');
require('classroom.class.php');
require('classroomblock.class.php');

class DataProvider
{

  function __construct($source) {
    $this->source = $source;
  }
  
  public function get_teachers() {
    return $this->query('SELECT * FROM teachers ORDER BY last_name;', [], 'Teacher');
  }
  
  public function get_teacher($id) {
    $sql = 'SELECT * FROM teachers WHERE id = :id;';
    return $this->get($sql, [':id' => $id], 'Teacher');
  }

  public function get_teacher_by_name_and_department($first_name, $last_name, $department_id) {
    $sql = 'SELECT * FROM teachers WHERE first_name = :first_name AND last_name = :last_name AND department_id = :department_id;';
    $sql_params = [
      ':first_name' => $first_name,
      ':last_name' => $last_name,
      ':department_id' => $department_id
    ];

    return $this->get(
      $sql, $sql_params,
      'Teacher'
    );
  }
  
  public function search_teachers($search) {
    return $this->query(
      'SELECT * FROM teachers WHERE first_name LIKE :search OR last_name LIKE :search;',
      [':search' => '%' . $search . '%'],
      'Teacher'
    );
  }
  
  public function add_teacher($firstname, $lastname, $department, $email) {
    $this->execute(
      'INSERT INTO teachers (first_name, last_name, department_id, email) VALUES (:first_name, :last_name, :department_id, :email);',
      [
        ':first_name' => $firstname,
        ':last_name' => $lastname,
        ':department_id' => $department,
        ':email' => $email
      ]
    );
  }
  
  public function update_teacher($teacher_id, $firstname, $lastname, $department, $email) {
    $sql = <<<EOS
    UPDATE teachers 
    SET first_name = :first_name, last_name = :last_name, department_id = :department_id, email = :email
    WHERE id = :teacher_id;
    EOS;

    $this->execute($sql, [
      ':first_name' => $firstname,
      ':last_name' => $lastname,
      ':department_id' => (int) $department,
      ':teacher_id' => (int) $teacher_id,
      ':email' => $email
    ]);
  }
  
  public function update_department($id, $name) {
    $sql = 'UPDATE departments SET name = :name WHERE id = :id;';
    $this->execute($sql, [':name' => $name, ':id' => $id]);
  }

  public function delete_department($id) {
    $this->execute('DELETE FROM departments WHERE id = :id;', [':id' => $id]);
  }
  
  public function delete_teacher($id) {
    $this->execute('DELETE FROM teachers WHERE id = :id;', [':id' => $id]);
  }

  // block data

  public function get_blocks() {
    return $this->query('SELECT * FROM blocks;', [], 'Block');
  }
  
  public function get_block($id) {
    $sql = 'SELECT * FROM blocks WHERE id = :id;';
    return $this->get($sql, [':id' => $id], 'Block');
  }

  // teacher block junction table data

  public function add_teacher_block($teacher_id, $block_id) {
    $sql = 'INSERT INTO teacher_blocks (teacher_id, block_id) VALUES (:teacher_id, :block_id);';
    $this->execute($sql, [':teacher_id' => $teacher_id, ':block_id' => $block_id]);
  }

  public function get_teacher_blocks($teacher_id) {
    $sql = 'SELECT * FROM teacher_blocks WHERE teacher_id = :teacher_id;';
    return $this->query($sql, [':teacher_id' => $teacher_id], 'TeacherBlock'); 
  }

  public function get_teacher_free_blocks($teacher_id) {
    $sql = <<<EOS
    SELECT * FROM blocks
    WHERE blocks.id NOT IN (
      SELECT blocks.id FROM blocks
      LEFT JOIN teacher_blocks
      ON blocks.id = teacher_blocks.block_id
      LEFT JOIN teachers
      ON teachers.id = teacher_blocks.teacher_id
      WHERE teacher_blocks.teacher_id = :teacher_id
    );
    EOS;
    return $this->query($sql, [':teacher_id' => $teacher_id], 'Block'); 
  }

  public function get_block_teachers($block_id) {
    $sql = 'SELECT * FROM teacher_blocks WHERE block_id = :block_id;';
    return $this->query($sql, [':block_id' => $block_id], 'TeacherBlock'); 
  }

  public function get_block_free_teachers($block_id) {
    $sql = <<<EOS
    SELECT * FROM teachers
    WHERE teachers.id NOT IN (
      SELECT teachers.id FROM teachers
      LEFT JOIN teacher_blocks
      ON teachers.id = teacher_blocks.teacher_id
      LEFT JOIN blocks
      ON blocks.id = teacher_blocks.block_id
      WHERE blocks.id = :block_id
    );
    EOS;
    
    return $this->query($sql, [':block_id' => $block_id], 'Teacher'); 
  }

  public function delete_teacher_blocks($teacher_id) {
    $this->execute('DELETE FROM teacher_blocks WHERE teacher_id = :teacher_id;',
      [':teacher_id' => $teacher_id]
    );
  }

  public function get_departments() {
    return $this->query(
      'SELECT * FROM departments ORDER BY LEFT(name, 1);',
      [],
      'Department'
    );
  }

  public function get_department($id) {
    $sql = 'SELECT * FROM departments WHERE id = :id;';
    return $this->get($sql, [':id' => $id], 'Department');
  }
  
  public function get_teachers_by_department($dept_id) {
    return $this->query('SELECT * FROM teachers WHERE department_id = :dept_id ORDER BY last_name;',
    [':dept_id' => $dept_id],
    'Teacher'
    );
  }

  public function add_department($name) {
    $this->execute(
      'INSERT INTO departments (name) VALUES (:name);',
      [':name' => $name]
    );
  }

  private function connect() {
    try {
      return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
    } catch (PDOException $e) {
      return null;
    }
  }

  private function query($sql, $sql_params = [], $class = '') {
    $db = $this->connect();

    if ($db == null) {
      return [];
    }

    if (empty($sql_params)) {
      $query = $db->query($sql);
    } else {
      $query = $db->prepare($sql);
      $query->execute($sql_params);
    }

    if ($query === false) {
      return [];
    } else {
      $data = $query->fetchAll(PDO::FETCH_CLASS, $class);

      $query = null;
      $db = null;
      
      return $data;
    }
  }

  private function get($sql, $sql_params, $class) {
    $db = $this->connect();

    if ($db == null) {
      return;
    }

    $stmt = $db->prepare($sql);
    $stmt->execute($sql_params);

    $data = $stmt->fetchAll(PDO::FETCH_CLASS, $class);

    if (empty($data)) {
      return;
    }

    $stmt = null;
    $db = null;

    return $data[0];
  }

  private function execute($sql, $sql_params) {
    $db = $this->connect();

    if ($db == null) {
      return;
    }

    $stmt = $db->prepare($sql);
    $stmt->execute($sql_params);

    $stmt = null;
    $db = null;
  }
  
  public function get_classrooms() {
    return $this->query(
      'SELECT * FROM classrooms ORDER BY LEFT(name, 1);',
      [],
      'Classroom'
    );
  }
  public function add_classroom($name) {
    $this->execute(
      'INSERT INTO classrooms (name) VALUES (:name);',
      [':name' => $name]
    );
  }
  public function get_classroom($id) {
    $sql = 'SELECT * FROM classrooms WHERE id = :id;';
    return $this->get($sql, [':id' => $id], 'Classroom');
  }

  public function delete_classroom($id) {
    $this->execute('DELETE FROM classrooms WHERE id = :id;', [':id' => $id]);
  }

  public function get_classroom_blocks($classroom_id) {
    $sql = 'SELECT * FROM classrooms_blocks WHERE classroom_id = :classroom_id;';
    return $this->query($sql, [':classroom_id' => $classroom_id], 'ClassroomBlock'); 
  }

  public function get_classroom_free_blocks($classroom_id) {
    $sql = <<<EOS
    SELECT * FROM blocks
    WHERE blocks.id NOT IN (
      SELECT blocks.id FROM blocks
      LEFT JOIN classrooms_blocks
      ON blocks.id = classrooms_blocks.block_id
      LEFT JOIN classrooms
      ON classrooms.id = classrooms_blocks.classroom_id
      WHERE classrooms_blocks.classroom_id = :classroom_id
    );
    EOS;
    return $this->query($sql, [':classroom_id' => $classroom_id], 'Block'); 
  }

  public function search_classrooms($search) {
    return $this->query(
      'SELECT * FROM classrooms WHERE name LIKE :search;',
      [':search' => '%' . $search . '%'],
      'Classroom'
    );
  }
}
