<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who's Free?: <?= $view_bag['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php require('partials/nav.php'); ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="mt-4 text-center"><?= $view_bag['heading']; ?></h1>
          <?php require("{$name}.view.php"); ?>
        </div>
      </div>
    </div>

    <!-- version without Popper see https://getbootstrap.com/docs/5.2/getting-started/introduction/ for more -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="/school/scripts/main.js"></script>
  </body>
</html>
