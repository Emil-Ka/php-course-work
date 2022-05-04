<?php
$host = "std-mysql";
$user = "std_1830_hashtag";
$pass = "rootroot";
$database = "std_1830_hashtag";
$mysql = new mysqli($host, $user, $pass, $database);
$result = $mysql->query("SELECT * FROM `field`");
$result = mysqli_fetch_all($result);

if (!$result) {
  echo 'err';
}

print_r($result);
?>