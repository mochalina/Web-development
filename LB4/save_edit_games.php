<html><body>
<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";} // установление соединения с сервером

$id_games=$_GET['id_games'];
    
$games_name=$_GET['games_name'] ;   
$games_genre=$_GET['games_genre'];
$games_developer= $_GET['games_developer'];
$games_publisher=$_GET['games_publisher'];
$games_sales=$_GET['games_sales'];

$zapros="UPDATE games SET games_name='$games_name', games_genre='$games_genre',
games_developer='$games_developer', games_publisher='$games_publisher', games_sales='$games_sales' 
WHERE id_games='$id_games'";

$result = $mysqli->query ($zapros);

if ($result) {
    if ($_SESSION['type'] == 1)
        echo "Все сохранено.<a href=games.php> Вернуться к списку игр </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Все сохранено.<a href=gamesAdm.php> Вернуться к списку игр </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения.<a href=games.php> Вернуться к списку игр </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения.<a href=gamesAdm.php> Вернуться к списку игр </a>";
}
?>
</body></html>