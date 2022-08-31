  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="/school">Who's Free?</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/school" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/school/teachers.php" id="teachers">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/school/blocks.php" id="blocks">Blocks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/school/departments.php" id="departments">Departments</a>
          </li>
        </ul>
        <ul class="navbar-nav float-end">
          <li class="nav-item">
            <?php if (is_user_authenticated()) : ?>
            <a class="nav-link" href="/school/logout.php">Logout</a>
            <?php else : ?>
            <a class="nav-link" href="/school/login.php">Login</a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
