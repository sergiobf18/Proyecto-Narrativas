<?php
$n1 = 35;
$n2 = 15;
$n3 = 15;
$n4 = "15";

var_dump($n1>$n2);
echo "<br>";
var_dump($n1<$n2);
echo "<br>";
var_dump($n1>=$n2);
echo "<br>";
var_dump($n1<=$n2);
echo "<br>";
var_dump($n1==$n2);
echo "<br>";
var_dump($n1!=$n2);
echo "<br>";

echo $n2," es igual a ",$n3;
var_dump($n2==$n3);
echo "<br>";
echo $n3," es igual a ",$n4;
var_dump($n2==$n3);
echo "<br>";
echo $n3," es igual y muy igual ",$n4;
var_dump($n3===$n4);
echo "<br>";

echo "Decisión compuesta: ";
var_dump($n1<=>$n2);
echo "<br>";