<?php
    $nombre = trim(strip_tags($_REQUEST["nombre"]));
    $telefono = trim(strip_tags($_REQUEST["telefono"]));
    $matriculado = $_REQUEST["matriculado"];
    $ensenanza = $_REQUEST["enseñanza"];
    $modo = $_REQUEST["modo"];
    
    
    for ($i=0;$i<count($modo);$i++)    
    {    
        $string = "El alumno ".$nombre.", con telefono ".$telefono.", esta matriculado en un ".$ensenanza."".PHP_EOL; 
        if ($modo[$i] == "1") 
        {
            print $string;
        }
        else if ($modo[$i] == "2")
        {
            print "Registrado en el archivo datos.txt <br>";
            $nombrearchivo ="datos.txt";
            $archivo = fopen($nombrearchivo,"a");
            fwrite($archivo, $string);
            fclose($archivo);
            echo '<a href="./datos.txt">Mostrar datos</a> ';
        }
    }
?>