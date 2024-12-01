<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>
<body>
<!--
    Quando eu tenho só o comando echo em uma super tag php, eu substituo o " php echo " por =

    &lt;?php echo "Bom dia"?&gt;

    &lt;?= "Bom dia"?&gt;
-->
    <?php 
        //Capturando dados do formulario retroalimentado
        $valor1 = $_GET['v1']?? 0;
        $valor2 = $_GET['v2']?? 0;
        $soma = $valor1 + $valor2;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?= "A soma vale $soma"?>
    </section>
</body>
</html>