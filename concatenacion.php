<?php

$nombre="Carlos";
$pais="El Salvador";
$numero=34;

$resultado=$nombre.$pais.$numero;

# . es el metodo para concatenar 2 o mas variables
echo $nombre.$pais

# Interpolacion de variables es colocar la variable en medio de una declaratoria
# Una opcion es colocar la variable directamente
echo "Mi nombre es: $nombre mi pais de residencia es $pais";

# Otra opcion es colocar la variable encerrada dentro de llaves
echo "Mi nombres es {$nombre} y tengo {$numero} años";
