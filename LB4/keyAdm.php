<html>
<head><title> Сведения о ключах </title></head>
<body>
<h2>Сведения о ключах:</h2>
<table border="1">
    <tr>
        <th>ID ключа</th>
        <th>дата приобретения</th>
        <th> дата окончания</th>
        <th> ОС</th>
        <th> магазин</th>
        <th> стоимость</th>
        <th> ключ</th>
        <th> Редактировать</th>
        <th> Уничтожить</th>
    </tr>
    </tr>
    <?php
    include("checks.php");
    require_once 'connect1.php';
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }
   $result=$mysqli->query("SELECT kl.id_key, kl.key_date, kl.key_date_end, games.games_name as games, stores.stores_name as stores, kl.key_cost, kl.key_name
FROM kl 
LEFT JOIN games ON kl.id_games=games.id_games
LEFT JOIN stores ON kl.id_stores=stores.id_stores"); // запрос на выборку сведений о пользователях

 $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){// для каждой строки из запроса
					$id_key = $row['id_key'];
                    $key_date = $row['key_date'];
                    $key_date_end = $row['key_date_end'];
                    $games = $row['games'];
                    $stores = $row['stores'];
                    $key_cost = $row['key_cost'];
                    $key_name = $row['key_name'];
					
					$key_date = date('d-m-Y', strtotime($key_date));
                    $key_date_end = date('d-m-Y', strtotime($key_date_end));

					echo "<tr>";
                    echo "<td>$id_key</td><td>$key_date</td><td>$key_date_end</td><td>$games</td><td>$stores</td><td>$key_cost</td><td>$key_name</td>";
                
 echo "<td><a href='edit_key.php?id_key=" . $row['id_key']
. "'>Редактировать</a></td>"; //Запуск редактирования
 echo "<td><a href='delete_key.php?id_key=" . $row['id_key']
. "'>Удалить</a></td>"; //запуск удаления
 echo "</tr>";
                    $counter++;
                }
            }
            print "</table>";
    print("<p>Всего ключей: $counter </p>");
    echo "<p><a href=new_key.php> Добавить ключ </a>";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=games.php> Вернуться назад </a>";
    elseif ($_SESSION['type'] == 2)
        echo "<p><a href=gamesAdm.php> Вернуться назад </a>";
    include("checkSession.php");
    ?>
</body>
</html>
