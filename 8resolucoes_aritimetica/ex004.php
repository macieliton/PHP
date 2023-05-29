<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>média aritmética e ponderada</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <main>
        <form action="" method="get">
            <label for="num1">digite um número: </label>
            <input type="number" name="num1" id="num1" value="$num1">
            <label for="peso1">digite um peso: </label>
            <input type="number" name="peso1" id="peso1" value="$peso1">
            <label for="num2">digite outro número: </label>
            <input type="number" name="num2" id="num2" value="$num2">
            <label for="peso2">digite outro peso: </label>
            <input type="number" name="peso2" id="peso2" value="$peso2">
            <input type="submit" value="calcular">
        </form>
    </main>
</body>
<?php 
    $num1 = $_GET['num1'];
    $peso1 = $_GET['peso1'];
    $num2 = $_GET['num2'];
    $peso2 = $_GET['peso2'];

    $media_aritmetica = ($num1 + $num2) / 2;
    $media_ponderada = ($num1*$peso1 + $num2*$peso2)/($peso1 + $peso2);

    echo "a média aritmética de $num1 e $num2 é $media_aritmetica";
    echo " e a média ponderada desses valores é $media_ponderada";
?>    
</html>