<form action="" method="post">
  <input type="hidden" name="id" value="<?= $model->id ?>">
  <div class="form-group">
    <div class="mb-3">
      <label for="classroomName" class="form-label">Edit Classroom Name</label>
      <input type="text" class="form-control" name="name" id="name" value="<?= $model->name ?>">
    </div>
    </div>
  </div>
  <h3>Schedule</h3>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="schedule[]" id="a_block" <?= in_array("1", $data) ? "checked " : '' ?>>
        <label class="form-check-label" for="a_block">
          A Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="3" name="schedule[]" id="b_block" <?= in_array("3", $data) ? "checked " : '' ?>>
        <label class="form-check-label" for="b_block">
          B Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="4" name="schedule[]" id="c_block" <?= in_array("4", $data) ? "checked " : '' ?>>
        <label class="form-check-label" for="c_block">
          C Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="5" name="schedule[]" id="d_block" <?= in_array("5", $data) ? "checked " : '' ?> >
        <label class="form-check-label" for="d_block">
          D Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="6" name="schedule[]" id="e_block" <?= in_array("6", $data) ? "checked " : '' ?>>
        <label class="form-check-label" for="e_block">
          E Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="7" name="schedule[]" id="f_block" <?= in_array("7", $data) ? "checked " : '' ?>>
        <label class="form-check-label" for="f_block">
          F Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="8" name="schedule[]" id="g_block" <?= in_array("8", $data) ? "checked " : '' ?>>
        <label class="form-check-label" for="g_block">
          G Block
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
