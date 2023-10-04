<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre', 'Diciembre'

);

#ordenando por ordem alfabética (por ser string),
#no caso de int ele ordena ascendente
sort($meses);

#ordenando por ordem alfabética REVERSA(por ser string)
#no caso de int ele ordena descendente
rsort($meses)

#com números é a mesma coisa
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php 
        foreach($meses as $mes){
            echo '<li>' . $mes . '</li>';
        }
        ?>
    </ul>
</body>
</html>