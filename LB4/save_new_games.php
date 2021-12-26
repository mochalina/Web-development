<?php
include("checks.php");
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysql_connect_error());
    exit();
} // установление соединения с сервером и подключение к базе данных:
 // Строка запроса на добавление записи в таблицу:
mysqli_query($link,"INSERT INTO games SET games_name='" . $_GET['games_name']
."', games_genre='".$_GET['games_genre']."', games_developer='"
.$_GET['games_developer']."', games_publisher='".$_GET['games_publisher'].
"', games_sales='".$_GET['games_sales']. "'");
if (mysqli_affected_rows($link) > 0) {
    print "<p>Спасибо, Ваша игра добавлена в базу данных.";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=games.php> Вернуться к списку игр </a>";
    elseif ($_SESSION['type'] == 2)
        echo "<p><a href=gamesAdm.php> Вернуться к списку игр </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения . <p><a href=games.php> Вернуться к списку игр </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения . <p><a href=gamesAdm.php> Вернуться к списку игр </a>";
}
mysqli_close($link);
?>
