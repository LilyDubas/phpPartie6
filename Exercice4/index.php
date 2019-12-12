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
    <p><?= $_GET['language'];?></p>
    <p><?= $_GET['server'];?></p>
  </div>
</body>
</html>
