<form action="" method="post">
  <div class="form-group">
    <h3>Name</h3>
    <div class="mb-3">
      <label for="teacherFirstName" class="form-label">Teacher's First Name</label>
      <input type="text" class="form-control" name="firstname" id="firstname">
    </div>
    <div class="mb-3">
      <label for="teacherLastName" class="form-label">Teacher's Last Name</label>
      <input type="text" class="form-control" name="lastname" id="lastname">
    </div>
    <div class="mb-3">
      <label for="teacherEmail" class="form-label">Teacher's Email</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <h3>Department</h3>
    <div class="mb-3">
      <select class="form-select" name="department">
        <option value="" label selected>Select a department</option>
        <?php foreach ($model as $department) : ?>
        <option value="<?= $department->id ?>"><?= ucwords($department->name); ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <h3>Schedule</h3>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="schedule[]" id="a_block">
        <label class="form-check-label" for="a_block">
          A Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="3" name="schedule[]" id="b_block">
        <label class="form-check-label" for="b_block">
          B Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="4" name="schedule[]" id="c_block">
        <label class="form-check-label" for="c_block">
          C Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="5" name="schedule[]" id="d_block">
        <label class="form-check-label" for="d_block">
          D Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="6" name="schedule[]" id="e_block">
        <label class="form-check-label" for="e_block">
          E Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="7" name="schedule[]" id="f_block">
        <label class="form-check-label" for="f_block">
          F Block
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="8" name="schedule[]" id="g_block">
        <label class="form-check-label" for="g_block">
          G Block
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
