<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $dinheiro = $_GET["dinheiro"];
            $conversao = ($dinheiro / 5.17);
            $padrao = numfmt_create("pt_br", NumberFormatter::CURRENCY);
            
            echo("<p>Seus ".numfmt_format_currency($padrao,$dinheiro, "BRL")." equivalem a US$ ".number_format($conversao, 2)."</p>");
        ?>
        <p>*Cotação fixa de R$5,17 informada diretamente no código</p>
    </section>
</body>
</html>