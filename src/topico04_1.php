<?php
$a=10;
$b=2;
echo "Adição:".($a + $b); // adição 12
echo "<br>Subtração:".($a - $b); // 8
echo "<br>Multiplicação:".($a * $b); // 20
echo "<br>Divisão:".($a / $b); // 5
echo "<br>Módulo:".($a % $b); // 0
echo "<br>Exponenciação:".($a ** $b); // 100
?>

<hr>

<?php
$a=10;// 10
$b=2;// 2
$a+=$b;// a=a+b// a=10+2// a=12
$b-=5;// b=-3
echo "a = ".$a; // imprime
echo "<br>b = ".$b; // imprime
$c=11;// 11
$d=6;// 6
$c%=$d;// 5
$d+=$a;// 18
echo "<br>c = ".$c;// imprime
echo "<br>d = ".$d;// imprime

$n="cinco";
$n.=$c;
echo "<br>n = ".$n;
// .= inclui valor ao final da variável// n+c= nc// cinco+5= cinco5
?>

<hr>
<?php
$x = 100;
echo"x = ".++$x;
echo "<br>valor final = ".$x;
echo"<br>x = ".$x++;
echo"<br> valor final = ".$x;

// matéria de prova
echo "<hr>";
$i=10;
echo "<br>i = $i";// imprime 10
$i++;// 10 + 1
$i++;// 11 + 1
++$i;// 1 + 12
echo "<br>i = $i";// imprime 13
$i--;// 13 - 1
--$i;// 1 - 12
echo "<br>i = $i";// imprime 11
?>