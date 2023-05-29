<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>calculo de desconto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="num1">preço do produto (R$):</label>
    <input type="number" name="preco" id="preco"
    min='0.10' step="0.01" value="<?=$num1?>">
    <label for="reaj">qual será o reajuste? (<span id="p">?</span>)%</label>
    <input type="range" name="reaj" id="reaj"
    min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
    <input type="submit" value="fazer o reajuste">
    </form>

<?php 

$num1 = $_REQUEST['preco'] ?? 0;
$reaj = $_REQUEST['reaj'] ?? 0;

$aumento = $num1 * $reaj / 100;
$novo_preco = $aumento + $num1;
?>

<section>
    <p>o produto que custava <?=number_format($num1, 2, ",", ".")?> com o aumento de <?=($aumento)?>% ficará
    <?=number_format($novo_preco, 2, ",", ".")?>
</p>
</section>


    <script>
        mudaValor()

        function mudaValor(){
            p.innerText = reaj.value
        }
    </script>
</body>
</html>