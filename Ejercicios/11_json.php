<?php
$mejoresJuadores =[
    'Daniel' => 'PadredeKingston',
    'Andres' => 'VaSaN_co',
    'Ricardo' => 'Ramsez52',
    'Jhon' => 'xXDoñaGladysXx'
];

echo '<pre>';
var_dump ($mejoresJuadores);
echo  '</pre>';
echo '<br>';

$jugadoresJson = json_encode($mejoresJuadores,JSON_UNESCAPED_UNICODE);
echo  '</pre>';
var_dump($jugadoresJson);
echo  '</pre>';
echo '<br>';

$arregloJson = json_decode($jugadoresJson);
echo '<pre>';
var_dump ($arregloJson);
echo  '</pre>';
echo '<br>';