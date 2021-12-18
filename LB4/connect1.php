<?php
$host = 'localhost';
$database = 'a0609677_games';
$user = 'a0609677_root';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
//$query = "SELECT * FROM a0609677_games.games";
//$result = mysqli_query($link, $query) or die("ошибка" . mysqli_error($link));
//if($result)
//{
//}
//mysqli_close($link);
?>
