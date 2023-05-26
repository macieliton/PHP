<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>formulário retroaliementado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num1">valor1: </label>
        <input type="number" name="num1" id="idnum1" value="<?=$num1?>">
        <label for="num2">valor 2: </label>
        <input type="number" name="num2" id="idnum2" value="<?=$num2?>">
        <input type="submit" value="somar">
        </form>
    </section>
    <section>
        <?php
        $soma = $num1 + $num2;
        echo "a soma de $num1 e $num2 é $soma!"
        ?>
    </section>
</body>
</html>