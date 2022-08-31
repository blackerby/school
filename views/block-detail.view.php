<div class="container text-center">
  <div class="row">
    <div class="col">
      <h3>Teaching</h3>
      <table class="table table-striped">
      <?php foreach($data as $teacher) : ?>
        <tr>
          <td>
            <a href="teacher-detail.php?teacher=<?= $teacher->id; ?>">
              <?= $teacher->first_name ?> <?= $teacher->last_name ?>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    </div>
  <div class="col">
    <h3>Free</h3>
    <table class="table table-striped">
    <?php foreach($free as $teacher) : ?>
      <tr>
        <td>
          <a href="teacher-detail.php?teacher=<?= $teacher->id; ?>">
            <?= $teacher->first_name ?> <?= $teacher->last_name ?>
          </a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    </div>
  </div>
</div>
