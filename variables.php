<?php

/*
1) Las variables en PHP se representan con un signo de dolar
seguido por el nombre de la variable

2) La variable tiene que comenzar con una letra o caracter de guion bajo,
seguido de cualquier numero de letras, numeros y otros guiones bajos.
No puede empezar con un numero

3) El nombre de la variable es sensible a minusculas y mayusculas (es decir,
"Variable" no es lo mismo que "variable" o "VARIABLE"). Se recomienda usar la
convención Camel case (es decir, $Variable)

4) Convencion Upper Case en variables es colocar todo el nombre de la variable en
mayusculas (VARIABLE), esto principalmente se ocupa para las constantes definidas
en PHP

5) Convencion Snake Case en variables es separar un nombre de variable por medio de
un guion bajo (_), esto en caso que se quieran colocar nombres de variables especiales
o funciones con otros detalles

*/

$nombre="Santiago";
echo $nombre;
#echo $Nombre;

$Nombre_completo = "Jose Santiago Burgos Mejia";
echo $Nombre_completo;