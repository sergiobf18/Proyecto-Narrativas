<?php
$login = true;
$premium = false;
$usuario = 'Oscar';

if ($login && $premium) 
{
    echo ("Bienvenid@ " . $usuario . " tienes un carro nuevo por ser premium");
} 
elseif ($login) 
{
    echo ("Bienvenid@ " . $usuario);
} 
else 
{
    echo ("No puede ingresar");
}
echo "<br>";
//Unir información
$jugador = [
    'nombre' => 'Oscar',
    'usuario' => 'DoñaTeresita',
    'zona' => 'latam norte',
    'informacion' =>[
        'creditos' => 3000,
        'RocketPass' => true,
        'categoria' => 4
    ]
    ];

 if(empty($jugador))
 {
    echo "El jugador no ha sido creado";
 }
 else
 {
    echo "El jugador fue creado con exito";
 }

if($jugador['informacion']['creditos'] > 500)
{
    echo $jugador['usuario']." puede comprar el pase de temporada. <br>";
}
else
{
    if($jugador['informacion']['RocketPass'])
    {
        echo "Articulo adquirido Gratis por ser ROCKETPASS";
    }
    else
    {
        echo "Lo siento debe adquirir mas creditos.<br> 
            100c -> $10.000. <br> 
            300c -> $20.000. <br> 
            500c -> $30.000. <br>";
    }
    
}

//Switch
switch($jugador['informacion']['categoria'])
    {
        case 1:
            echo "Eres Madera";
            break;
        case 2:
            echo "Eres Plata";
            break;
        case 3:
            echo "Eres Oro";
            break;
        case 4:
            echo "Eres Platino";
            break;
        default:
            echo "Eres UnRanking";
            break;
                 
    }
?>