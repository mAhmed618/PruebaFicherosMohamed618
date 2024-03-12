<?php
$nombreArchivo = "fichero.txt";
$palabraBuscar = "casa";
$conteo = 0;

// Verificar si el archivo existe
if (!file_exists($nombreArchivo)) {
    die("El archivo no existe");
}
// Leer el contenido del archivo
$contenido = file_get_contents($nombreArchivo);
// Contar las veces que aparece la palabra "casa"
$conteo = substr_count($contenido, $palabraBuscar);
// Crear la nueva línea a añadir
$nuevaLinea = "Casa aparece $conteo veces\n"; //con <br> no iba por eso \n
// Añadir la nueva línea al principio del contenido extraido del archivo
$contenidoModificado = $nuevaLinea . $contenido;
// Escribimos el contenido modificado de vuelta al archivo original
file_put_contents($nombreArchivo, $contenidoModificado);

echo "El archivo fue actualizado con éxito.";
?>