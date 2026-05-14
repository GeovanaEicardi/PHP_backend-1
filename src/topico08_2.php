<?php
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo"];
$total = count($nomes); // count=4
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>"; // chama a primeira variavel
echo "Último valor do array: ".$nomes[count($nomes)-1]; // chama a ultima variavel (se colocar a posição 3 e incluir nome fica preso no 3)
echo "<hr>";
for($i=0;$i<count($nomes);$i++){ // looping classico pesquisar
// for($i=0;$i<4($nomes);$i++){  nesse caso mostraria as variaveis de 0 a 3 ja o count mostra todos os valores 
	echo $nomes[$i]."<br>";
}
?>
<hr>
<?php
// indexado
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>"; // print_r junto de<pre> mostra do lado esquerdo o indice e na direita o valor (vai aparecerer a primeira lista com esses valores)
array_push($uf, "TO"); // array push adiciona um valor no final da variavel
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");
array_pop($uf); // tira o ultimo valor do array da posição em que ele for colocado (pr) se estiver na linha 16 tira o mg por exemplo
echo "<pre>";print_r($uf);echo "</pre>"; // vai aparecer a segunda lista com esses vvalores sem o pr
sort($uf); // ordem alfabetica na ultima lista
echo "<pre>";print_r($uf);echo "</pre>"; // terceira lista em ordem alfabetica com esses valores
?>
<!-- codigo para preencher seleção de caixas de forma automatica -->
UF<select name="uf">
<option>selecione uf</option>
<?php
for($i=0;$i<count($uf);$i++){
    echo "<option>".$uf[$i]. "</option>";
}

?>
</select>
<hr>

<?php
$estudante = [
    "id"=>1,
    "nome"=> "Bete",
    "nota"=>9.5
];
foreach($estudante as $valor){ // coloca o valor da variavel automaticamente
    echo "<br>$valor";
}
?>
<hr>
<?php
$estudante = [
    "id"=>1,
    "nome"=> "Bete",
    "nota"=>9.5
];
foreach($estudante as $pos=>$valor){ // $pos coloca a posição dos valores da variavel
    echo "<br>$pos: $valor"; // mostra a posição e o valor daa variavel
}

echo "<hr>";
$multi=[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
for($i=0;$i<3;$i++){ // linha
    for($j=0;$j<3;$j++){ // coluna
        echo $multi[$i][$j]. " ";
    }
    echo "<br>";
}
?>

<!-- variavel simples guarda um valor de cada vez e variavel array guarda mais de um valor -->
