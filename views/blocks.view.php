<table class="table table-striped">
  <?php foreach ($model as $block) : ?>
    <tr>
      <td>
        <a href="block-detail.php?block=<?= $block->id; ?>">
          <?= $block->name; ?>
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
