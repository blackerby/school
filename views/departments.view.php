
<table class="table table-striped">
  <?php foreach ($model as $department) : ?>
    <tr>
      <td>
        <a href="department-detail.php?dept=<?= $department->id; ?>">
          <?= ucwords($department->name); ?>
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
