<?php
function suma($n1,$n2)
{
    echo $n1+$n2;
    echo '<br>';
}
suma(5,4);
suma(9,3);
suma(7,1);
suma('7','1');

//que retornen valores
function autenticacionUsuario(bool $login):string|int
{
    if($login)
    {
        return "Usuario autenticado";
    }
    else 
    {
        return "Usuario NOOOO autenticado";
    }
}
$autenticado = AutenticacionUsuario(true);
echo $autenticado;
echo '<br>';
$autenticado = AutenticacionUsuario(false);
echo $autenticado;

