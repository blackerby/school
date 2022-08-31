<div class="col-lg-12">
  <?php if (is_user_authenticated()) : ?>
    <div class="container text-center">
      <a href="admin/edit-teacher.php?teacher=<?= $model->id; ?>">Edit</a>
      <a href="admin/delete-teacher.php?teacher=<?= $model->id; ?>">Delete</a>
    </div>
  <?php endif; ?>
  <h4 class="m-3 text-center">
    <a href="department-detail.php?dept=<?= $model->department_id; ?>">
      <?= get_department($model->department_id); ?>
    </a>
  </h4>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <h3>Teaches During</h3>
      <table class="table table-striped">
        <?php foreach($data as $block) : ?>
          <tr>
            <td>
              <a href="block-detail.php?block=<?= $block->block_id; ?>">
                <?= get_block($block->block_id); ?>
              </a>
              in Classroom
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  <div class="col">
    <h3>Free During</h3>
    <table class="table table-striped">
      <?php foreach($free as $block) : ?>
        <tr>
          <td>
            <a href="block-detail.php?block=<?= $block->id; ?>">
              <?= get_block($block->id); ?>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
