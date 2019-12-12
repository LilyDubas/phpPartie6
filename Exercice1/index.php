<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PHP</title>
</head>
<body>
  <div class="jumbotron m-auto text-center">
    <h1>Paramètres URL</h1>
    <p><?php echo $_GET['firstname'];?></p>
    <p><?php echo $_GET['lastname'];?></p>

  </div>
</body>
</html>
