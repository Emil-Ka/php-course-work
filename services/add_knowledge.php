<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <title>Add new knowledge</title>
</head>
<body>
  <?php
    error_reporting(0);

    $name = $_POST['name'];
    $description = $_POST['description'];
    $now = date('Y-m-d');

    $host = "std-mysql";
    $user = "std_1830_hashtag";
    $pass = "rootroot";
    $database = "std_1830_hashtag";

    $mysql = mysqli_connect($host, $user, $pass, $database);

    if (mysqli_connect_errno()) {
      echo 
        '<h1 class="error">Не удалось подключиться к базе данных!</h1>
        <h2 class="error-text">Код ошибки: '.mysqli_connect_errno().'</h2>
        <h2 class="error-text">Текст ошибки: '.mysqli_connect_error().'</h2>';
      exit();
    };

    $result = mysqli_query($mysql, "INSERT INTO `field` VALUES (NULL, '$name', '$description', '$now')");

    if (mysqli_errno($mysql)) {
      echo 
        '<h1 class="error">Не удалось добавить область знаний!</h1>
        <h2 class="error-text">Код ошибки: '.mysqli_errno($mysql).'</h2>
        <h2 class="error-text">Текст ошибки: '.mysqli_error($mysql).'</h2>';
      exit();
    };

    mysqli_close($mysql);

    header('Location: ../index.php');
  ?>
</body>
</html>