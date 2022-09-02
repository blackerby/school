<?php if (is_user_authenticated()) : ?>
  <div class="container text-center">
    <a href="admin/edit-classroom.php?room=<?= '#' ?>">Edit</a>
    <a href="admin/delete-classroom.php?room=<?= $model->id ?>">Delete</a>
  </div>
  <?php endif; ?>

  <div class="container text-center">
  <div class="row">
    <div class="col">
      <h3>Occupied During</h3>
      <table class="table table-striped">
        <?php foreach($data as $block) : ?>
          <tr>
            <td>
              <a href="block-detail.php?block=<?= $block->block_id; ?>">
                <?= get_block($block->block_id); ?>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  <div class="col">
    <h3>Open During</h3>
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
