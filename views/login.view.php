<div class="container">
  <div class="row">
    <form action="" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" id="email" />
      </div>
      <div class="mt-4">
        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" id="password" />
      </div>
      <div class="mt-4">
      <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
  <div class="row">
    <?php 
      if (isset($view_bag['status'])) {
        echo $view_bag['status'];
      }
    ?>
  </div>
</div>
