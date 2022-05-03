<?php
$host = "std-mysql";
$user = "std_1830_hashtag";
$pass = "rootroot";
$mysql = new mysqli($host, $user, $pass, "field");
$result = $mysql->query("SELECT * FROM `field`");
$result = $result->fetch_assoc();

if (!$result) {
  echo 'err';
}

echo $result;