<?php
// Nombre del archivo original
$nombreArchivoOriginal = "fichero1.txt";
// Nombres de los archivos de destino
$archivoConNumeros = "f1.txt";
$archivoSinNumeros = "f2.txt";
// Abrir el archivo original para lectura
$archivoOriginal = fopen($nombreArchivoOriginal, "r");
// Abrir o crear los archivos de destino para escritura
$f1 = fopen($archivoConNumeros, "w");
$f2 = fopen($archivoSinNumeros, "w");
// Verificar si el archivo se abrió correctamente
if ($archivoOriginal !== false) {
    while (($linea = fgets($archivoOriginal)) !== false) {
        // Comprobar si la línea contiene un número y escribirla en su archivo
        if (preg_match('/\d/', $linea)) {
            
            fwrite($f1, $linea);
        } else {
            
            fwrite($f2, $linea);
        }
    }
    // Cerrar los archivo s
    fclose($archivoOriginal);
    fclose($f1);
    fclose($f2);
    echo "Los archivos han sido creados y divididos correctamente.";
} else {
    echo "Error al abrir el archivo original.";
}
?>