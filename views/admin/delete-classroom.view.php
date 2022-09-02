<div class="row">
  Are you sure you want to delete <?= $model->name ?>?
</div>

<form action="" method="post">
  <input type="hidden" name="id" value="<?= $model->id ?>">
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
