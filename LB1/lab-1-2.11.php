<HTML>
<TITLE> Мочалина А.С. ПИ-323 - Задача № 1-3 - Вариант 3</TITLE>
<BODY>
<TABLE>
<?php
$N = rand(0, 1000);
$sum1=0;
print ("<p> Случайное число ".$N. "<br>");
	for ($i=2; $i < $N; $i++) { 
		if ($N % $i == 0) {
			$sum1=$sum1+$i;
		}
	}	
if ($sum1 == 0) {	echo  $sum1 , ' - характер числа "',$N ,'"  - простое';}
else {	echo $sum1 , ' - характер числа "', $N, '" <br>';}
?>
</TABLE>
</BODY>
</HTML>