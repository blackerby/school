<div class="row">
  <a href="add-teacher.php">Add New Teacher</a>
  <a href="add-department.php">Add New Department</a>
</div>

<table class="table table-striped">
  <?php foreach ($model as $teacher) : ?>
    <tr>
      <td>
        <a href="../teacher-detail.php?teacher=<?= $teacher->id; ?>">
          <?= $teacher->last_name . ', ' . $teacher->first_name; ?>
        </a>
      </td>
      <td>
        <a href="../department-detail.php?dept=<?= $teacher->department_id; ?>">
          <?= get_department($teacher->department_id); ?>
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
