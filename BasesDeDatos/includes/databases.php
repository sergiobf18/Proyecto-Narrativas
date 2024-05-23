<?php
$db = mysqli_connect('localhost','root','1234','navidad');

if(!$db)
{
    echo "Error en la conexión";
    exit;
}

else
{
    echo "Conexión correcta";
}