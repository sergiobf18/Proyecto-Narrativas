<?php
$motos = [
    [
        'marca'=>'Ducatti',
        'cilindraje'=>200,
        'precio'=>15000000,
        'disponible'=> true
    ],
    [
        'marca'=>'Aprilia',
        'cilindraje'=>350,
        'precio'=>20000000,
        'disponible'=> false
    ],
    [
        'marca'=>'BMW',
        'cilindraje'=>500,
        'precio'=>45000000,
        'disponible'=> true
    ]
    ];
    
  /*foreach ($motos as $moto)
{
    echo '<li>';
    echo 'Marca: '.$moto['marca'];
    echo '</li>';
}*/
 
foreach ($motos as $moto)
{?>
    <li>
        <p>Marca: <?php echo $moto['marca']; ?></p>
        <p>Cilindraje: <?php echo $moto['cilindraje']; ?></p>
        <p>Precio: $<?php echo $moto['precio']; ?></p>
            <?php
                if($moto['disponible'])
                {
                    echo '<p style="color:green"><strong >En stock!!!!!!</strong></p>';
                }
                else
                {
                    echo '<p style="color:red">Proximamente más unidades.</p>';
                }
            ?>
        </p>
    </li>
<?php }