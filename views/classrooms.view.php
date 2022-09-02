<div class="row mt-4 mb-4">
  <form class="d-flex me-4" role="search" action="classrooms.php" method="get">
    <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>
<table class="table table-striped">
  <?php foreach ($model as $classroom) : ?>
    <tr>
      <td>
        <a href="classroom-detail.php?room=<?= $classroom->id; ?>">
          <?= $classroom->name; ?>
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
