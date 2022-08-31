<div class="row mt-4 mb-4">
  <form class="d-flex me-4" role="search" action="teachers.php" method="get">
    <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>

<table class="table table-striped">
  <?php foreach ($model as $teacher) : ?>
    <tr>
      <td>
        <a href="teacher-detail.php?teacher=<?= $teacher->id; ?>">
          <?= $teacher->last_name . ', ' . $teacher->first_name; ?>
        </a>
      </td>
      <td>
        <a href="department-detail.php?dept=<?= $teacher->department_id ?>"><?= get_department($teacher->department_id); ?></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
