<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tuantq</title>
</head>

<body>
   <h1>
      <?php
      echo "Hello world !";
      $pdo = new PDO('mysql:dbname=php8-db;host=mysql', 'tuantq', 'password', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

      $query = $pdo->query('SHOW VARIABLES like "version"');

      $row = $query->fetch();

      echo 'MySQL version:' . $row['Value'];
      ?>
   </h1>
   <?php
   echo phpinfo();
   ?>
</body>

</html>