<?php
//While
echo '<h2>Ciclo while </h2>';
$i = 1;
while($i<=15)
{
    echo $i.'<br>';
    $i++;
}
echo '<br>';
//do-while
echo '<h2>Ciclo  Do While </h2>';
$i = 1;
do{
    echo $i.'<br>';
    $i++;
}while($i<=15);
echo '<br>';
//For
echo '<h2>Ciclo  For </h2>';

for ($i=1;$i<=15; $i++)
{
     echo $i.'<br>';  
}
echo '<br>';

/*
Ejercicio 
*/

echo '<h2>Ejercicio</h2>';
 
for($i=1;$i<=100;$i++)
{
    if($i%15==0){
        echo 'Oscar Chanclas <br>';
    }
    else if($i%5==0){
        echo 'Chanclas <br>';
    }
    else if($i%3==0){
        echo 'Oscar<br>';
    } else{
        echo $i . '<br>';
    }
}

//foreach
echo '<h2>Ciclo Foreach </h2>';
$videojuegos = ['Warzone','super mario','gta5','Animal Crossing','assasins creed'];
foreach($videojuegos as $videojuegos)
{
    echo $videojuegos.'<br>';
}
echo '<br>';

//Arreglos asociativos
echo '<h2>Arreglos asociativos </h2>';
$mejoresJuadores =[
    'Daniel' => 'PadredeKingston',
    'Andres' => 'VaSaN_co',
    'Ricardo' => 'Ramsez52',
    'Jhon' => 'xXDoñaGladysXx'
];
foreach ($mejoresJuadores as $jugador)
{
    echo $jugador.'<br>';
}