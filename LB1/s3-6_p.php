<meta charset="utf-8" />
<?php
//процентное отношение строчных и прописных букв к общему числу символов в тексте
if (isset($_POST["firstButton"])) {
    $lol = iconv_strlen($_POST["prhase"], 'UTF-8');
    $mass = str_split($_POST["prhase"]);
    $array = array(
        'A', 'a', 'B', 'b', 'C', 'c', 'D', 'd', 'E', 'e', 'F', 'f', 'G', 'g', 'H', 'h', 'I', 'i',
        'J', 'j', 'K', 'k', 'L', 'l', 'M', 'm', 'N', 'n', 'O', 'o', 'P', 'p', 'Q', 'q', 'R', 'r',
        'S', 's', 'T', 't', 'U', 'u', 'V', 'v', 'W', 'w', 'X', 'x', 'Y', 'y', 'Z', 'z',
        'А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж', 'З', 'з',
        'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р',
        'С', 'с', 'Т', 'т', 'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ч', 'ч', 'Ш', 'ш', 'Щ', 'щ',
        'Ъ', 'ъ', 'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю', 'Я', 'я'
    );
    $l = 0;
    $i = 0;
    while ($i < count($mass)) {
        $mass[$i] = iconv("windows-1251","UTF-8", $mass[$i]);
        for ($j = 0; $j < count($array); $j++) {
            if ($mass[$i] == $array[$j])
                $l++;
        }
        $i++;
    }
    $kekw = $l / $lol * 100;
    echo("Отношение букв к длине текста: " . round($kekw, 2) . "%");
}

//Удалить из заданного предложения заданное слово
if (isset($_POST["text"]) and isset($_POST["word"])) {
    $text = str_replace($_POST["word"], "", $_POST["text"]);
    echo $text;
}

//Подсчитать число различных гласных, входящих в данный текст
if (isset($_POST["thirdButton"])) {
    $char = array("а", "е", "ё", "ж", "и", "о", "у", "ы", "э", "ю", "я");
    $string = mb_str_split($_POST["text1"]);
    $count = strlen($_POST["text1"]);
    $sum = 0;
    for ($i = 0; $i <= 10; $i++) {
        for ($k = 0; $k <= $count; $k++) {
            if ($char[$i] == $string[$k]) $sum++;
        }
    }
    echo("В строке " . $sum . " гласных");
}
function mb_str_split($str, $l = 0)
{
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}

?>