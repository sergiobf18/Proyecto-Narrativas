<?php
//Arreglos indexados
$videojuegos =[];
var_dump($videojuegos);
echo "<br>";

$marcas = array();
var_dump($marcas);
echo "<br>";

$videojuegos = ['Warzone','super mario','gta5','Animal Crossing','assasins creed'];
var_dump($videojuegos);
echo "<br>";

echo "<pre>";
var_dump($videojuegos);
echo "</pre>";

var_dump ($videojuegos[2]);
echo "<br>";

$videojuegos[2] = "grand theft auto";
echo "<pre>";
var_dump($videojuegos);
echo "</pre>";

//Ingresar al final del arreglo
array_push($videojuegos,"Rocket League");
echo "<pre>";
var_dump($videojuegos);
echo "</pre>";

//Ingresar al inicio del arreglo
array_unshift ($videojuegos,"Rocket League");
echo "<pre>";
var_dump($videojuegos);
echo "</pre>";

$jugadoresRocket = array('VaSaN_co','PadredeKingston','Ramsez52','xXDoñaGladysXx');
echo "<pre>";
var_dump($jugadoresRocket);
echo "</pre>";


//Arreglos asociativos
echo '<h2> Arreglos Asociativos </h2>';
$mejoreJuadores =[
    'Daniel' => 'PadredeKingston',
    'Andres' => 'VaSaN_co',
    'Ricardo' => 'Ramsez52',
    'Jhon' => 'xXDoñaGladysXx'
];
echo "<pre>";
var_dump($mejoreJuadores);
echo "</pre>";

var_dump ($mejoreJuadores['Jhon']);
echo "<br>";

$mejoreJuadores =[
    'Daniel' => [
        'usuario' => 'PadredeKingston',
        'clasificacion' => 'Oro',
        'puntuacion' => 3224
    ],
    'Andres' => [
        'usuario' => 'VaSaN_co',
        'clasificacion' => 'Platino',
        'puntuacion' => 8429
    ],
    'Ricardo' => [
        'usuario' => 'Ramsez52',
        'clasificacion' => 'Cobre',
        'puntuacion' => 2327
    ],
    'Jhon' => [
        'usuario' => 'xXDoñaGladysXx',
        'clasificacion' => 'Madera',
        'puntuacion' => 423
    ]
];

echo "<pre>";
var_dump($mejoreJuadores);
echo "</pre>";

echo "<pre>";
var_dump($mejoreJuadores['Jhon']);
echo "</pre>";


//Funciones
echo "<h2> funciones de arreglos </h2>";
$arr1 = ['Warzone','super mario','gta5','Animal Crossing','assasins creed'];
$arr2 = [];
$arr3 = array('Jhon','Juan','Otoniel');
$arr4 = array ();

var_dump(empty($arr1));
echo "<br>";
var_dump(empty($arr2));
echo "<br>";
var_dump(empty($arr3));
echo "<br>";
var_dump(empty($arr4));
echo "<br>";
echo "<br>";

var_dump(isset($arr1));
echo "<br>";
var_dump(isset($arr2));
echo "<br>";
var_dump(isset($arr3));
echo "<br>";
var_dump(isset($arr4));
echo "<br>";
echo "<br>";

var_dump(isset($mejoreJuadores['Andres']));
echo "<br>";
var_dump(isset($mejoreJuadores['Stefany']));
echo "<br>";
echo "<br>";

//verificar contenido
var_dump(in_array('Rocket League',$arr1));
echo "<br>";
var_dump(in_array('Warzone',$arr1));
echo "<br>";
echo "<br>";

//Ordenar
$arr2 = [42, 13, 18, 7, 4, 9, 50, 16];
echo "<pre>";
var_dump($arr2);
echo "</pre>";
sort($arr2);
echo "<pre>";
var_dump($arr2);
echo "</pre>";
rsort($arr2);
echo "<pre>";
var_dump($arr2);
echo "</pre>";
echo "<br>";


echo "</pre>";
var_dump($mejoreJuadores);
echo "</pre>";
asort($mejoreJuadores);
echo "</pre>";
var_dump($mejoreJuadores);
echo "</pre>";
arsort($mejoreJuadores);
echo "</pre>";
var_dump($mejoreJuadores);
echo "</pre>";
echo "<br>";
echo "<br>";

ksort($mejoreJuadores);
echo "</pre>";
var_dump($mejoreJuadores);
echo "</pre>";
krsort($mejoreJuadores);
echo "</pre>";
var_dump($mejoreJuadores);
echo "</pre>";