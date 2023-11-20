<?php
$primero=[];
$segundo=[];
$p=0;
$s=0;
Print "<h1>Jugador 1</h1>";
for($i=0;$i<5;$i++)
{
    $num=rand(1,6);
    $p+=$num;
    $primero[$i]=$num;
    print "<img src=./img/$primero[$i].jpg width=100 heigth=100>";
}
Print "<h1>Jugador 2</h1>";
for($i=0;$i<5;$i++)
{
    $num=rand(1,6);
    $s+=$num;
    $segundo[$i]=$num;
    print "<img src=./img/$segundo[$i].jpg width=100 heigth=100>";
}
print "<h1>Resultado</h1>";
if($s<$p)
{
    print "<p>En conjunto a ganado el jugador <b>1</b></p>";
}
elseif($p<$s)
{
    print "<p>En conjunto a ganado el jugador <b>2</b></p>";
}
elseif($p==$s)
{
    print "<p>En conjunto, ambos jugadores empataron</p>";
}
?>