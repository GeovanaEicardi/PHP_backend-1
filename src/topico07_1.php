<?php
// loopinng tem tres elementos -> valor inicial, condiçõa e contador
echo "<h1>While</h1>";
$i=0;
while($i<5){
    echo " $i";
    $i++;
}
/*
saida: 0 1 2 3 4
1.valor inicial? 0 
2.condição? enquanto o valor for menor que 5 continuar contando $i<5
3.contador? $i++
4.quantas vezes o looping foi executado? 5
5.qual o valor que tornou a condição como falsa? 5
------------------------
*/
echo "<hr>";
$i=11;
while($i<15){
    echo " $i";
    $i++;
}
/*
saida: 11 12 13 14
1. 11
2. $i<15
3. $i++
4. 5
5. 15
*/

echo "<hr>";
$i=4;
while($i>=0){
    echo " $i";
    $i--;
}
/*
saida: 4 3 2 1 0
1. 4
2. $i>=0 ou $i>-1
3. $i--
4. 5
5. -1
*/
echo "<hr>";
$i=0;
while($i<=10){
    echo " $i";
    $i+=2;
}

/*
saida: 0 2 4 6 8 10
1. 0
2. $i<=10 ou $i<12
3. $i+=2
4. 6
5. 12
*/
//--------------------------------------------------------------

echo "<h1>Do while</h1>";
// a diferença entre Do e while é que o Do executa ao menos uma vez independente da condição ser falsa
$i=0;
do{
    echo " $i";
    $i++;
}while($i<5);
// --------------------------------------------------------

echo "<h1>For</h1>";
for($i=0;$i<5;$i++){
    echo " $i";
}
// as chaves são opcionais
// a diferença é só a "facilidade visual"
// ------------------------------------------------------------

echo "<h1>Looping aninhado</h1>";
for($i=0;$i<3;$i++){ // externo
    for($j=0;$j<2;$j++){ // interno
        echo "$i $j<br>";
    }
}
// o looping externo fica parado enquanto o interrno estiver em execução

echo "<hr>";

for($i=4;$i<7;$i++){
    for($j=0;$j<3;$j++){
        echo "$i $j<br>";
    }
}

?>