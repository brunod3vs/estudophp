<?php
$semana = array('Lunes', 'Martes','Miercoles','Jueves','Viernes', 'Sabado', 'Domingo');
$semana[7] = "algo novo";

#cabe varios tipos dentro, e pode ser definido dessa forma também
$outroarray = ['Texto', 1 , true, 2.2, 'teste'];

#utilizar . para concatenar e o '<br />' para pular linha
echo $semana[7] . '<br />';
echo $outroarray[4] . '<br />';


?>