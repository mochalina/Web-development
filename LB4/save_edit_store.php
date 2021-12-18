<html><body>
<?php
$mysqli = new mysqli("localhost", "a0609677_root", "root", "a0609677_games");
if ($mysqli->connect_errno){
    echo"Невозможно подключиться к серверу";} // установление соединения с сервером
	
	
$id_stores=$_GET['id_stores'];    
$stores_name=$_GET['stores_name'] ;    
$stores_url=$_GET['stores_url'];

$zapros="UPDATE stores SET stores_name='$stores_name', stores_url='$stores_url' 
WHERE id_stores='$id_stores'";

$result = $mysqli->query ($zapros);

if ($result) 
{echo 'Все сохранено. <a href="stores.php"> Вернуться к списку магазинов </a>'; }
else { echo 'Ошибка сохранения. <a href="stores.php">Вернуться к списку магазинов</a> '; }
?>
</body></html>