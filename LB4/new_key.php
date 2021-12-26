<html>
<head> <title> Добавление нового ключа </title> </head>
<body>
<H2>Добавление нового ключа:</H2>
<form action="save_new_key.php" method="get">
<?
 include ("checks.php");
    require_once 'connect1.php';
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }
    //id игры
//id игры
   $result = $mysqli->query("SELECT id_games, games_name FROM games");
    echo "<br>Игра: <select name='id_games'>"; 

    if ($result){
    while ($row = $result->fetch_array()){
    $id_games = $row['id_games'];
    $games_name = $row['games_name'];
    echo "<option value='$id_games'>$games_name</option>";
    }
    }
	 echo "</select>";
//id цифрового магазина
	 $result = $mysqli->query("SELECT id_stores, stores_name FROM stores");
     echo "<br>Магазин: <select name='id_stores'>";

     if ($result){
     while ($row = $result->fetch_array()){
      $id_stores = $row['id_stores'];
      $stores_name = $row['stores_name'];
      echo "<option value='$id_stores'>$stores_name</option>";
      }
      }
       echo "</select>";

 print "<br> дата приобретения: <input name='date_buy' placeholder='dd-mm-yyyy' type='date' value=$date_buy>";
    print "<br> дата окончания: <input name='date_ex' placeholder='dd-mm-yyyy' type='date' value=$date_ex>";
    print "<br> стоимость: <input name='price' size='11' type='int' value=$price>";
    print "<br> ключ: <input name='key_name' size='11' type='int'value=$key_name>";
    echo "<p><input name='add' type='submit' value='Добавить'></p>";
    echo "<p><input name='b2' type='reset' value='Очистить'></p>";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=key.php> Вернуться к списку ключей </a></p>";
    elseif ($_SESSION['type'] == 2)
        echo "<p><a href=keyAdm.php> Вернуться к списку ключей </a></p>";
    ?>
</form>
</body>
</html>
