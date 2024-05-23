<?php
//Arreglos indexados
$videojuegos = [];
var_dump($videojuegos);
echo "<br>";

$marcas = array();
var_dump($marcas);
echo "<br>";

$videojuegos = ['Dark souls', 'Sekiro','Elden Ring','Demons souls','Pes'];
var_dump($videojuegos);
echo "<br>";

echo "<pre>";
var_dump($videojuegos);
echo "</pre>";

var_dump($videojuegos[2]) ;
echo "<br>";

$videojuegos[2] = "Elden Ring DLC";
var_dump($videojuegos[2]) ;
echo "<br>";

//Ingreso al final del arreglo
array_push($videojuegos,"Psychonauts");
echo "<pre>";
var_dump($videojuegos);
echo "</pre>";

//Ingreso al inicio del arreglo
array_unshift($videojuegos,"Devil may cry");
echo "<pre>";
var_dump($videojuegos);
echo "</pre>";

$jefesEldenRing = array('Malenia','Maliket','Godfrey','Renala');
echo "<pre>";
var_dump($jefesEldenRing);
echo "</pre>";
//Arreglos asociativos
$rankingJefes = [
    'Malenia' => [
        'Dificultad' => 'Muy dificil',
        'Tipo de Jefe' => 'Opcional',
        'Ranking' => '1',
        'Ubicación' => 'Arbol heriatico',
    ]
    ];

echo "<pre>";
var_dump($rankingJefes);
echo "</pre>";
?>