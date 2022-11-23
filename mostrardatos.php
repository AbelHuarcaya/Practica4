<?php
$nombre_archivo="datos.txt";
$fd = fopen($nombre_archivo, 'r');
while (($linea=fgets($fd)) !== false){
   print "$linea";
}	
fclose($fd);
?>