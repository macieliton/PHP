<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>raiz</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="" method="get">
            <label for="valor">Digite um número:</label>
            <input type="number" name="valor" id="valor" value="$valor">
        </form>
        <?php 
        $valor = $_GET['valor' ?? 1];
        $raiz_quadrada = sqrt($valor);
        $raiz_cubica = $valor ** (1/3);
        echo "a raiz quadrada de $valor é $raiz_quadrada";
        Echo "e a raiz cubica é $valor é $raiz_cubica";
        ?>
    </main>
</body>
</html>