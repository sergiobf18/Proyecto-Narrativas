<?php
$cliente = "Ing luna (invitade)";
echo "<br>";
echo "Tamaño del texto: ", strlen($cliente);
echo "<br>";
echo $cliente;
echo "<br>";
echo "Todo en mayuscula: ", strtoupper($cliente);
echo "<br>";
echo "Todo en minuscula: ", strtolower($cliente);
echo "<br>";

$usuarioVideojuego1 ="PadredeLuna";
$usuarioVideojuego2 ="padredeluna";
var_dump(strtolower($usuarioVideojuego1) === strtolower($usuarioVideojuego2));
echo "<br>";

//Reemplazar una letra
echo str_replace("Padre","Mamá",$usuarioVideojuego1);
echo "<br>";

//Buscar un texto
echo strpos($usuarioVideojuego1, "Luna");
echo "<br>";

//concatenar
$rango = "oro";
echo "El jugador ",$usuarioVideojuego1, " tiene el rango",$rango;
echo "<br>";
echo "El jugador {$usuarioVideojuego1} tiene el rango {$rango}.";
echo "<br>";

?>