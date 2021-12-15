<HTML>
<TITLE> Мочалина А.С. ПИ-323 - Задача № 1-3 - Вариант 3</TITLE>
<BODY>
<TABLE>
    <?php
    $N = rand(0, 1000);
    $sum1 = 0;
    print ("<p> Случайное число " . $N . "<br>");
    for ($i = 2; $i < $N; $i++) {
        if ($N % $i == 0) {
            $sum1 = $sum1 + $i;
        }
    }
    if ($sum1 == 0) {
        echo $sum1, ' - характер числа "', $N, '"  - простое';
    } else {
        echo $sum1, ' - характер числа "', $N, '" <br>';
    }
    ?>
    <?php
    $N = rand(1, 49);
    $M = rand(50, 99);
    echo 'N = ' . $N . '<br>';
    echo 'M = ' . $M . '<br>';
    for ($k = $N; $k <= $M; $k++) {
        for ($i = 1; pow($i, 3) <= $k; $i++) {
            for ($j = 1; pow($j, 3) <= $k; $j++) {
                for ($r = 1; pow($r, 3) <= $k; $r++) {
                    if (pow($i, 3) + pow($j, 3) + pow($r, 3) == $k) {
                        echo $k . ' - можно представить  в виде суммы кубов ' . $i . '^3, ' . $j . '^3 ' . $r . '^3 <br>';
                        $k++;
                    }
                }
            }
        }
    }
    ?>
</TABLE>
</BODY>
</HTML>