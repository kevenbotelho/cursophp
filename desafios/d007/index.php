<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário</title>
</head>
<body>
    <?php 
        $salminimo = 1380;
        $sal = $_GET['sal'] ?? 1;
        $salconvertido = number_format($sal, 2, ',', '.');
        $quantidadedesalario = intdiv($sal, $salminimo);
        $restante = $sal-($salminimo * $quantidadedesalario);
        $restanteconvertido = number_format($restante, 2, ',' , '.')
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" step="0.001" value="<?php echo $sal?>">

            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
        echo"
        <p>
            Quem recebe um salário de R\$$salconvertido ganha $quantidadedesalario salários mínimos + R\$$restanteconvertido .
        </p>"
        ?>
    </section>
</body>
</html>