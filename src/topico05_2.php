<?php
$idade = 17;

if ($idade >= 18) {
   echo "voce é maior de idade";
}
else{
    echo "voce é menor de idade";
}
?>
<hr>
<?php
$semaforo = "azul";
if ($semaforo == "verde"){
  echo "siga";
}
elseif ($semaforo == "amarelo"){
    echo "atenção";
}
elseif($semaforo == "vermelho"){
    echo "pare";
}
else{
    echo "invalido";
}
// um sinal de = atribui um novo valor a variavel
// dois sinais == mostra igualdade
// tres sinais === compara diferenciando o tipo (texto ou número ex. "5" === 5)

// else serve para evitar situações não previstas
?>
<hr>
<?php
// condição ninja na mesma linha
$idade = 20;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;
// ? = se / : = senao
?>
<hr>

<?php
$semaforo = "azul";
switch ($semaforo){
    case "verde":
        echo "siga";
            break;
    case "amarelo":
        echo "atencao";
            break;
    case "vermelho":
        echo "pare";
            break;
    default:
        echo "invalido";
}
?>
<hr>
<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)
// w = week

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>
<hr>
<?php
date_default_timezone_set('America/Sao_Paulo');//(definir) o fuso horário
echo date('d/m/Y H:i:s');  // Exemplo de saída: 08/10/2024 14:35:20
?>
<hr>

<?php
$nome = "uninove";
echo "nome = $nome";
echo "<br>MD5 = ".md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "Hash = $hash";
// md5 cria uma criptografia de 32 caracteres hexadecimal que não tem caminho de volta

?>
