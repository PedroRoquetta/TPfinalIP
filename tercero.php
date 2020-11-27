<?php
//este es el tercer intento de cambios
echo "hola";
$saludo= trim(fgetc(STDIN));
while($saludo != "hola"){
    echo "hola";
    $saludo=trim(fgetc(STDIN));
}

echo " Ciao";