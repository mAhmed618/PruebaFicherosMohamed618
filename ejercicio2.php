<?php
$nombreArchivoOriginal = "fichero1.txt";
$archivoConNumeros = "f1.txt";
$archivoSinNumeros = "f2.txt";
$archivoOriginal = fopen($nombreArchivoOriginal, "r");

$f1 = fopen($archivoConNumeros, "w");
$f2 = fopen($archivoSinNumeros, "w");
if ($archivoOriginal !== false) {
    while (($linea = fgets($archivoOriginal)) !== false) {
        if (preg_match('/\d/', $linea)) {
            
            fwrite($f1, $linea);
        } else {
            
            fwrite($f2, $linea);
        }
    }
    fclose($archivoOriginal);
    fclose($f1);
    fclose($f2);
    echo "Los archivos han sido creados y divididos correctamente.";
} else {
    echo "Error al abrir el archivo original.";
}
?>