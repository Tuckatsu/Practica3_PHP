<?php
    $ancho = trim(strip_tags($_REQUEST["ancho"]));
    $alto= trim(strip_tags($_REQUEST["alto"]));
    
    if(($alto=="" || $ancho=="") || (!is_numeric($alto)|| !is_numeric($ancho)||($alto>=100 || $ancho>100)||($ancho<=0||$alto<=0)))
    {
        print "<p>Numeros no valido</p>";
    }
    else
    {
        print "Ancho: $ancho <br>";
        print "Alto: $alto <br><br>";
        for($i=0;$i<$alto;$i++)
        {
            for($k=0;$k<$ancho;$k++)
            {
                print "* ";
            }
            print "<br>";
        }
    }
?>  