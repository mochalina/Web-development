<html><body>
<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";}
$id_key=$_GET['id_key'];    
$key_date=$_GET['key_date'] ;    
$key_date_end=$_GET['key_date_end'];
$id_games=$_GET['id_games'];
$id_stores=$_GET['id_stores'];
$key_cost=$_GET['key_cost'];
$key_name=$_GET['key_name'];

$result = $mysqli->query ("UPDATE kl SET key_date='$key_date', key_date_end='$key_date_end' , 
id_games='$id_games', id_stores='$id_stores', key_cost='$key_cost', key_name='$key_name'
WHERE id_key='$id_key'");

if ($result) {
    if ($_SESSION['type'] == 1)
        echo "Все сохранено.<p><a href=key.php> Вернуться к списку ключей </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Все сохранено.<p><a href=keyAdm.php> Вернуться к списку ключей </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения. <p></p><a href=key.php> Вернуться к списку ключей </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения. <p><a href=keyAdm.php> Вернуться к списку ключей </a>";
}
?>
</body></html>