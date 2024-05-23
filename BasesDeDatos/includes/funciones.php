<?php
function obtenerDatos()
{
    try{
        //Nohay errores
        //Importar la Base de Datos
        require 'darabase.php';
        var_dump($db);
        //Escribir peticiones SQL
        $sql = " SELECT * FROM recetas;";
        $consulta = mysqli_query($db,$sql);
        //Recibir los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";
        // cerrar la Bases de datos
        $cerrar = mysqli_close($db);
        echo $cerrar;
    }
    catch(\Throwable $th)
    {
        var_dump($th);

    }
}
obtenerDatos();