<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>máquina do tempo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <main>
        <form action="" method="get">
            <label for="num1">digite o ano que você nasceu: </label>
            <input type="number" name="num1" id="num1" value="$num1">
            <label for="num2">digite o ano que você está: </label>
            <input type="number" name="num2" id="num2" value="$num2">
            <input type="submit" value="calcular">
        </form>
    </main>
</body>
<?php 
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$resultado = ($num1) - ($num2);

echo "você tem $resultado anos";
?>
</html>