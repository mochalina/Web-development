<?php
$mysqli = new mysqli("localhost", "a0609677_root", "root", "a0609677_games") or die ("Невозможно
подключиться к серверу");
$id_key = $_GET['id_key'];
$result = $mysqli->query("DELETE FROM kl WHERE id_key='$id_key'");
header("Location: key.php");
exit;
?>
