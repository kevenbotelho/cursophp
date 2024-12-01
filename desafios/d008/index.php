<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raizes de um número</title>
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 0;
        $quadrada = $num ** (1/2);
        $quadradaform = number_format($quadrada, 3, ',', '.');
        $cubica= $num ** (1/3);
        $cubicaform = number_format($cubica, 3, ',', '.');
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?php echo $num?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            echo "<p>Analisando o número <strong>$num</strong>, temos</p>";
            echo"
            <ul>
                <li>A sua raiz quadrada é <strong>$quadradaform</strong></li>
                <li>A sua raiz cúbica é <strong>$cubicaform</strong></li>
            </ul>";
        ?>
    </section>
</body>
</html>