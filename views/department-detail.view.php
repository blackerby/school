<?php if (is_user_authenticated()) : ?>
  <div class="container text-center">
    <a href="admin/edit-department.php?dept=<?= $model->id; ?>">Edit</a>
    <a href="admin/delete-department.php?dept=<?= $model->id; ?>">Delete</a>
  </div>
  <?php endif; ?>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <table class="table table-striped mt-3">
          <?php foreach($data as $teacher) : ?>
          <tr>
            <td>
              <a href="teacher-detail.php?teacher=<?= $teacher->id; ?>">
                <?= $teacher->first_name; ?> <?= $teacher->last_name; ?>
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
