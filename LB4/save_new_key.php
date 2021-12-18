 <?php
    $mysqli = new mysqli("localhost", "a0609677_root", "root", "a0609677_games");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $key_date = $_GET['key_date'];
    $key_date_end = $_GET['key_date_end'];
    $id_games = $_GET['id_games'];
    $id_stores = $_GET['id_stores'];
    $key_cost = $_GET['key_cost'];
    $key_name = $_GET['key_name'];

    // Выполнение запроса
    $result = $mysqli->query("INSERT INTO kl
        SET key_date='$key_date', key_date_end='$key_date_end',
        id_games='$id_games', id_stores='$id_stores',
        key_cost='$key_cost', key_name ='$key_name'"
    );

if ($result){
print "<p>Внесение данных прошло успешно!";
print "<p><a href='key.php'> Вернуться к списку </a>";
}
else{
print "Ошибка сохранения <a href='key.php'> Вернуться к списку </a>";
}
   
?>