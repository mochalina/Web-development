<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
$id_games = $_GET['id_games'];
if ($_SESSION['type'] == 2)
    $result = $mysqli->query("DELETE FROM games WHERE id_games ='$id_games'");
else
    echo "Недостаточно прав";
header("Location: gamesAdm.php");
exit;
?>
