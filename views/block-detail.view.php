<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <h3>Teaching</h3>
        <ul>
        <?php foreach ($data as $teacher) : ?>
          <li>
            <a href="teacher-detail.php?teacher=<?= $teacher->id; ?>">
              <?= $teacher->first_name ?> <?= $teacher->last_name ?>
            </a>
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
      <div class="row">
        <h3>Free</h3>
        <ul>
        <?php foreach ($free as $teacher) : ?>
          <li>
            <a href="teacher-detail.php?teacher=<?= $teacher->id; ?>">
              <?= $teacher->first_name ?> <?= $teacher->last_name ?>
            </a>
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
