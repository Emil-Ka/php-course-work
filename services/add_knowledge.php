<?php
$name = $_POST['name'];
$description = $_POST['description'];
$now = date('Y-m-d');

$host = "std-mysql";
$user = "std_1830_hashtag";
$pass = "rootroo";
$database = "std_1830_hashtag";

$mysql = new mysqli($host, $user, $pass, $database);

if ($mysqli->connect_errno) {
  echo 
    '<h1 class="error">Соединение не удалось: '.$mysqli->connect_error.'</h1>';
  exit();
};

$result = $mysql->query("INSERT INTO `field` VALUES (NULL, '$name', '$description', '$now')");

if ($mysqli->errno) {
  echo 
    '<h1 class="error">Ошибка: '.$mysqli->error.'</h1>';
  exit();
};

$mysqli->close();

header('Location: ../index.php');
?>