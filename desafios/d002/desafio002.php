<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomizador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $random = mt_rand(0, 100);
            echo("
            <p>Gerando um número aleatório entre 0 e 100</p>
            <p>O número gerado foi $random</p>
            ");
        ?>
        <div style="text-align: center;">
            <a href="javascript:location.reload();
            ">Gerar outro</a>
        </div>
    </section>
</body>
</html>