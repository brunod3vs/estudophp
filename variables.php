<?php

# String:
$nombre = "Bruno";

# Integer
$numero = 7;

# Double:
$numero_decimal = 7.7;

# Boolean:
$verdadero = false;

#null
$edad;

echo $nombre;
echo $numero;

#utilizar aspas duplas permite comitar
echo "Hola, $nombre";
#ou utilizar o . para concatenar
echo 'Hola, ' . $nombre;

#mostra o tipo da variavel
echo gettype($nombre);
?>