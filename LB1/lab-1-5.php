<p> PHP-скрипт, в котором вычисляется значение заданного выражения (c+4*d-12)/(1-(a/2))
    для случайных аргументов из интервала [-20, 20]:
<p>
    <?php
    $a = rand(-20, 20);
    $d = rand(-20, 20);
    $c = rand(-20, 20);
    echo('a =' . $a);
    echo('<br> d =' . $d);
    echo('<br> c =' . $c);
    echo('<br>');
    echo('(c+4*d-12)/(1-(a/2)) =' . ($c + 4 * $d - 12) / (1 - ($a / 2)) . '<br>');
    ?>
<p> PHP-скрипт, в котором вычисляется значение заданного выражения (25/c-d+2)/(d+a^2-1)
    для случайных аргументов из интервала [-20, 20]:
<p>
    <?php
    $a = rand(-20, 20);
    $d = rand(-20, 20);
    $c = rand(-20, 20);
    echo('a =' . $a);
    echo('<br> b =' . $b);
    echo('<br> d =' . $d);
    echo('<br> c =' . $c);
    echo('<br> d =' . POW($d, 2));
    echo('<br>');
    echo('(25/c-d+2)/(d+a^2-1) =' . (25 / $c - $d + 2) / ($d + POW($a, 2) - 1) . '<br>');
    ?>
