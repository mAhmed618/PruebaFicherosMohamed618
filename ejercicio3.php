<?php

// Nombres de los archivos
$archivo1 = "fichero2.txt";
$archivo2 = "fichero3.txt";
$archivoDestino = "fichero4.txt";

// Abrir archivos para lectura
$handle1 = fopen($archivo1, "r");
$handle2 = fopen($archivo2, "r");

// Abrir el archivo de destino para escritura
$destino = fopen($archivoDestino, "w");

// Leer la primera línea de cada archivo
$linea1 = fgets($handle1);
$linea2 = fgets($handle2);

// Mientras haya líneas en alguno de los dos archivos
while ($linea1 !== false || $linea2 !== false) {
    // Comparar las líneas y escribir la menor en el archivo de destino
    if ($linea2 === false || ($linea1 !== false && strcmp($linea1, $linea2) < 0)) {
        fwrite($destino, $linea1);
        $linea1 = fgets($handle1); // Leer la siguiente línea del archivo 1
    } else {
        fwrite($destino, $linea2);
        $linea2 = fgets($handle2); // Leer la siguiente línea del archivo 2
    }
}

// Cerrar los archivos
fclose($handle1);
fclose($handle2);
fclose($destino);

echo "Los archivos ha sindo mezclados correctamente en $archivoDestino.";

?>


