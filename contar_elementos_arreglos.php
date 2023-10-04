<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre', 'Diciembre'

);

echo count($meses) . '<br />';

#pegando o ultimo item do array, salvando em variavel e utilizando:
$ultimo_mes = count($meses) -1;
echo $meses[$ultimo_mes];
?>