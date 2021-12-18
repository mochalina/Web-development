<html><body>
<?php
$mysqli = new mysqli("localhost", "a0609677_root", "root", "a0609677_games");
if ($mysqli->connect_errno){
    echo"Невозможно подключиться к серверу";} // установление соединения с сервером

$id_key=$_GET['id_key'];    
$key_date=$_GET['key_date'] ;    
$key_date_end=$_GET['key_date_end'];
$id_games=$_GET['id_games'];
$id_stores=$_GET['id_stores'];
$key_cost=$_GET['key_cost'];
$key_name=$_GET['key_name'];

$result = $mysqli->query ("UPDATE kl SET key_date='$key_date', key_date_end='$key_date_end' , 
id_games='$id_games', id_stores='$id_stores', key_cost='$kluch_cost', key_name='$key_name'
WHERE id_key='$id_key'");

    
if ($result) 
{echo 'Все сохранено. <a href="key.php"> Вернуться к списку ключей </a>'; }
else { echo 'Ошибка сохранения. <a href="key.php">Вернуться к списку ключей</a> '; }
?>
</body></html>