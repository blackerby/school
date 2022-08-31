<div class="container">
<?php if (is_user_authenticated()) : ?>
  <div class="container text-center">
    <a href="admin/edit-department.php?dept=<?= $model->id; ?>">Edit</a>
    <a href="admin/delete-department.php?dept=<?= $model->id; ?>">Delete</a>
  </div>
  <?php endif; ?>
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
