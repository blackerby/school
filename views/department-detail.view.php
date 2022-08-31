<div class="container">
  <a href="admin/edit-department.php?dept=<?= $model->id; ?>">Edit</a>
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <ul>
          <?php foreach ($data as $teacher) : ?>
            <li>
              <a href="teacher-detail.php?teacher=<?= $teacher->id; ?>">
                <?= $teacher->first_name; ?> <?= $teacher->last_name; ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</div>
