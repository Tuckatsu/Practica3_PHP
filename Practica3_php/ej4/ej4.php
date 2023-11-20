<?php
$nombre = $_POST['nombre'];
$trabajo = $_POST['trabajo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$otras = $_POST['otras'];
$nombre2 = $_POST['nombre2'];
$boton = $_POST['boton'];
$file = "agenda.txt";

if ($boton == "guardar") {
    $archivo = fopen($file, "a");
    $string = "Contacto: $nombre, Trabajo: $trabajo, Telefono: $telefono, Direccion: $direccion, Otras: $otras" .PHP_EOL;
    fwrite($archivo,$string);
    fclose($archivo);
}

if ($boton == "mostrar") {
    $archivo = fopen($file, "r");
    while (!feof($archivo)) {
        echo fgets($archivo) . "<br>";
    }
    fclose($archivo);
   
}

if ($boton == "buscar") {
    $archivo = fopen($file, "r");
    $encontrado = false;
    while (!feof($archivo)) {
        $line = fgets($archivo);
        if (strpos($line,"Contacto: $nombre2" ) !== false) {
            echo  $line."<br>";
            $encontrado = true;
        }
    }
    fclose($archivo);
    if (!$encontrado) {
        echo'No se encontraron datos de la busqueda';
    }
}
?>
