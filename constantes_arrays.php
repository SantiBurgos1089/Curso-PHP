<?php

# Sintaxis vieja
define("NOMBRE","Carlos");

echo NOMBRE

# Sintaxis nueva
const NOMBRE1="Santiago";

echo NOMBRE1

# Arrays
# Sintaxis basica de creacion y acceso
$estudiantes=array("Carlos","Jose","Vanessa","Katy");
echo $estudiantes[2];

# Otra sintaxis adicional PHP >= 5.4
$estudiantes1=["Carlos","Jose","Vanessa","Katy"];

# Un array puede llevar varios tipos de valores
$array1=["Nombre",7.5,2,"Cadena"];

# Array de tipo asociativo
# Su sintaxis suele ocuparse principalmente de la siguiente manera
$tutor=[
    "nombre"=>"Carlos",
    "apellido"=>"Alfaro",
    "edad"=>27
];

$tutor["edad"]=19
echo $tutor["edad"];

# Array de multiples dimensiones
$tutor_2=[
    "nombre"=>"Vanessa",
    "apellido"=>"Doofensmirthz",
    "edad"=>16,
    "cursos"=>["PHP","Python","CSS"]
];

echo $tutor_2["cursos"][1];

echo count($estudiantes)

echo count($tutor_2,COUNT_RECURSIVE);