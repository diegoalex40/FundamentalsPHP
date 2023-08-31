<?php

// \n --> te ayuda a dar un salto de linea si esta destinado a la terminal
echo "Hola mundo de nuevo \n";

$nombre = "Carlos";
$apellido = "Santana";

// Concatenar lineas de codigo
echo "Yo me llamo " . $nombre ." ". $apellido . "\n";
// Las comillas dobles hacen que se puedan leer todo lo de dentro de las comillas
echo "No, no. Yo me llamo $nombre $apellido \n";

echo "El resultado de : 4 x 5 es = " . (4 * 5);


/*  PROCESO DE DEBUGGIN EN PHP  */

// Un arreglo o array de datos:
$personas = [
    "Carlos" => 22,
    "Mr. Michi" => 15,
    "Juan" => 65
];

var_dump ($personas);

// Hacemos un salto de línea para una mejor visibilidad del código
echo "\n";

print_r( $personas );

#COMENTARIOS DE OTRAS OPCIONES PUEDE SER:  # O // O /**/
