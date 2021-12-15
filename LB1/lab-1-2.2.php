<p> Наиб. число:
<p>
<?php
$a = rand(1, 10);
$b = rand(1, 10);
print ('a =' . $a . '<br>');
print ('b =' . $b . '<br>');
if ($a > $b) echo 'Наиб. a = ' . $a;
elseif ($b > $a) echo 'Наиб. b = ' . $b;
else  echo 'Числа равны';
?>