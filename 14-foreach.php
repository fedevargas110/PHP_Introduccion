<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Auris',
        'precio' => 50,
        'disponibilidad' => true
    ],
    [
        'nombre' => 'Monitor 144HGZ 24"',
        'precio' => 250,
        'disponibilidad' => true
    ],
    [
        'nombre' => 'Teclado',
        'precio' => 150,
        'disponibilidad' => false
    ]
];


foreach ($productos as $producto){?> <!--para crear los li cerramos php y lo volvemos a abrir dentro del foreach-->

    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: $ <?php echo $producto['precio']; ?></p>
        <?php
        if($producto['disponibilidad']){
            echo '<p> Discponible </p>';
        }else {
            echo '<p> No Discponible </p>';
        }
        ?>
    </li>

    <?php //abrimos de vuelta php
}


include 'includes/footer.php';