<?php
$host = "std-mysql";
$user = "std_1830_hashtag";
$pass = "rootroot";
$database = "std_1830_hashtag";
$mysql = new mysqli($host, $user, $pass, $database);
$result = $mysql->query("SELECT * FROM `field`");
$result = $result->fetch_assoc();

if (!$result) {
  echo 'err';
}

echo $result;
?>