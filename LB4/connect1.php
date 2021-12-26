<?php
$host = 'localhost';
$database = 'a0609677_games';
$user = 'a0609677_root';
$password = 'root';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
