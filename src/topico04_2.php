<?php
$a=10;// a = 10  int
$b="10";// b = "10"  string
echo "Igualdade = ".($a==$b)."<br>";// true
echo "Idêntico = ".($a===$b)."<br>";// false
echo "Não igual = ".($a!=$b)."<br>";// false
echo "Não Idêntico = ".($a!==$b)."<br>";// true
echo "<hr>";

$a="10";// a = "10"  string
$b="10";// b = "10"  string
echo "Igualdade = ".($a==$b)."<br>";// true
echo "Idêntico = ".($a===$b)."<br>";// true
echo "Não igual = ".($a!=$b)."<br>";// 
echo "Não Idêntico = ".($a!==$b)."<br>";// 

// Não - not - !
echo "<hr>";
$a=10;
$b=20;
$c=50;
$d=($a<=$b);// true
var_dump ($d);// false
echo "<hr> d =".$d ;

// E - and - &&
echo "<hr>";
$e=($a<=$d) && ! ($c>1000);
var_dump($e);// true

// Ou - or - ||
echo "<hr>";
$f=($a>$b) || ($c<1000);
var_dump($f);// true
echo "<hr>";

//Xor
// os parenteses externos devem existir para o xor funcionar
$g=(($a<$b) xor ($b<$c));
var_dump($g);// true

// o ! transforma a condição ao seu oposto

// operado ternario
echo "<hr>";
$d=($a<=$b) ? "Verdadeiro" : "Falso";// true
$e=($a>=$c) ? "Verdadeiro" : "Falso";// false
echo "d = $d<br>e = $e";

?>