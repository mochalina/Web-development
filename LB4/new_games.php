<html>
<head> <title> Добавление новой игры </title> </head>
<body>
<H2>Добавление новой игры:</H2>
<?php include("checks.php"); ?>
<form action="save_new_games.php" method="get">
 Название: <input name="games_name" size="30" type="varchar">
<br>жанр: <input name="games_genre" size="20" type="varchar">
<br>разработчик: <input name="games_developer" size="40" type="varchar">
<br>издатель: <input name="games_publisher" size="30" type="varchar">
<br> объем продаж: <input name="games_sales" size="11" type="int">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<?php
if ($_SESSION['type'] == 1)
    echo "<p><a href=games.php> Вернуться к списку игр </a>";
elseif ($_SESSION['type'] == 2)
    echo "<p><a href=gamesAdm.php> Вернуться к списку игр </a>";
?>
</body>
</html>