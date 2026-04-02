<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1> Par - Impar </h1>
    <form method = "post" action = "">
        Dgite um número <input type="number" id="num" name="num" required > <br>
        <!-- required te obriga a preencher um valor -->
    <imput type="submit" velue="verificar!">
    </form>
    <?php
       if(count($_POST)==0) exit;
        $num=$_POST["num"];
        $res=($num%2==0)?"PAR":"IMPAR";

        echo "$num é $res";
    ?>
</body>
</html>