<?php
echo "<b>JUGADOR 1</b>";
$dado1 = rand (1,6);
$dado2 = rand (1,6);
$dado3 = rand (1,6);
$dado4 = rand (1,6);
$dado5 = rand (1,6);

print "<p>\n";
print "<img src='./img/$dado1.jpg' width=100 height=100>\n";
print "<img src='./img/$dado2.jpg' width=100 height=100>\n";
print "<img src='./img/$dado3.jpg' width=100 height=100>\n";
print "<img src='./img/$dado4.jpg' width=100 height=100>\n";
print "<img src='./img/$dado5.jpg' width=100 height=100>\n";
print "</p>\n";
$suma1 = $dado1 + $dado2 + $dado3 + $dado4 + $dado5;
print "<p> $suma1 </p>";

echo "<b>JUGADOR 2</b>";
$dado1 = rand (1,6);
$dado2 = rand (1,6);
$dado3 = rand (1,6);
$dado4 = rand (1,6);
$dado5 = rand (1,6);

print "<p>\n";
print "<img src='./img/$dado1.jpg' width=100 height=100>\n";
print "<img src='./img/$dado2.jpg' width=100 height=100>\n";
print "<img src='./img/$dado3.jpg' width=100 height=100>\n";
print "<img src='./img/$dado4.jpg' width=100 height=100>\n";
print "<img src='./img/$dado5.jpg' width=100 height=100>\n";
print "</p>\n";
$suma2 = $dado1 + $dado2 + $dado3 + $dado4 + $dado5;
print "<p> $suma2 </p>";

$mayor = max($suma1, $suma2);
if($suma1 > $suma2){
    echo "Ha ganado el Jugador 1";
}
if($suma2 > $suma1){
    echo "Ha ganado el Jugador 2";
}

print "<p> El ganador ha sacado $mayor </p>";
?>