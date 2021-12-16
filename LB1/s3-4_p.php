<?
$a = "Здравия желаю, товарищ ";

switch ($_POST["b"]) {
    // смотрим, чему равна переменная $z
    case "Blum":
        $c = "Блум";
        break;
    case "Stella":
        $c = "Стелла";
        break;
    case "Techna":
        $c = "Текна";
        break;
    case "Musa":
        $c = "Муза";
        break;
    default:
        $c = "Вы незарегистрированный пользователь!";
        $a = "";
}
echo($a . $c);
?>