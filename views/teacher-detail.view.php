<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="mt-4">
        <?= $view_bag['title']; ?>
        <a href="admin/edit-teacher.php?teacher=<?= $model->id; ?>">Edit</a>
        <a href="admin/delete-teacher.php?teacher=<?= $model->id; ?>">Delete</a>
      </h1>
      <div class="row">
        <a href="department-detail.php?dept=<?= $model->department_id; ?>"><?= get_department($model->department_id); ?></a>
      </div>
      <!-- TODO: improve styling -->
      <div class="row">
        <h3>Teaches During</h3>
        <ul>
          <?php foreach($data as $block) : ?>
            <li>
              <a href="block-detail.php?block=<?= $block->block_id; ?>"><?= get_block($block->block_id); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="row">
        <h3>Free During</h3>
        <ul>
          <?php foreach($free as $block) : ?>
            <li>
              <a href="block-detail.php?block=<?= $block->id; ?>"><?= get_block($block->id); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
