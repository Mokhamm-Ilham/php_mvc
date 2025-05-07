<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar User</title>
</head>
<body>
  <h1>Daftar User</h1>
  <?php
    foreach ($users as $user) {
      # code...
      echo "<p>Nama: ".$user['username']."</p>";
      echo "<p>Password: ".$user['password']."</p>";
      echo "<hr>";
    }
  ?>
</body>
</html>