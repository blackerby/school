<form action="" method="post">
  <input type="hidden" name="id" value="<?= $model->id ?>">
  <div class="form-group">
    <h3>Name</h3>
    <div class="mb-3">
      <label for="teacherFirstName" class="form-label">Teacher's First Name</label>
      <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $model->first_name; ?>">
    </div>
    <div class="mb-3">
      <label for="teacherLastName" class="form-label">Teacher's Last Name</label>
      <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $model->last_name; ?>">
    </div>
    <h3>Department</h3>
    <div class="mb-3">
      <select class="form-select" name="department">
        <option value="" label>Select a department</option>
        <option value="1" <?= $model->department_id == 1 ? "selected" : ''; ?>>English</option>
        <option value="2" <?= $model->department_id == 2 ? "selected" : ''; ?>>History</option>
        <option value="3" <?= $model->department_id == 3 ? "selected" : ''; ?>>Math</option>
        <option value="4" <?= $model->department_id == 4 ? "selected" : ''; ?>>Science</option>
        <option value="5" <?= $model->department_id == 5 ? "selected" : ''; ?>>Fine Arts</option>
        <option value="6" <?= $model->department_id == 6 ? "selected" : ''; ?>>Modern & Classical Languages</option>
        <option value="7" <?= $model->department_id == 7 ? "selected" : ''; ?>>Physical Education</option>
        <option value="8" <?= $model->department_id == 8 ? "selected" : ''; ?>>Computer Science</option>
      </select>
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
