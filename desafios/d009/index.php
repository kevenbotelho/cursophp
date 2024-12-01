<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Aritméticas</title>
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 1;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 1;

        $media = ($v1+$v2) / 2;
        $mediaform =  number_format($media, 2, ',','.');
        $mediaponderada = (($v1*$p1) + ($v2*$p2)) / ($p1 + $p2);
        $mediaponderadaform =  number_format($mediaponderada, 2, ',','.');
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?php echo $v1?>">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?php echo $p1?>">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?php echo $v2?>">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?php echo $p2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo"<p>Analisando os Valores $v1 e $v2: </p>";
            echo"<p>A <strong>Média Aritmética Simples</strong> é $mediaform</p>";
            echo"<p>A <strong>Média Aritmética Ponderada</strong> ponderada é $mediaponderadaform</p>";
        ?>
    </section>
</body>
</html>