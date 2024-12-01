<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        section#estrutura{
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: center;
        }
        div{
            width: 80%;
            height: 70px;
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
            flex-grow: 0;
            flex-shrink: 0;
        }
        .ladoalado{
            display: flex;
            flex-flow: row nowrap;
            

        }
        #dividendo , #divisor , #divisao , #resto{
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;

            width: 60%;
        }
        div#divisor{
            border-left: 1px solid ;
            border-bottom: 1px solid;
        }
        div#divisao{
            border-left: 1px solid;
        }
    </style>
    <title>Anatomia de uma divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor =  $_GET['divisor'] ?? 1;
        $divisaointeira = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?php echo $dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" value="<?php echo $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="estrutura">
        <h2>Estrutura da divisão</h2>
        <div class="ladoalado">
            <div id="dividendo">
                <?= "$dividendo"?>
            </div>
            <div id="divisor">
                <?= "$divisor" ?>
            </div>
        </div>
        <div class="ladoalado">
            <div id="resto">
                <?= $resto?>
            </div>
            <div id="divisao">
                <?= $divisaointeira?>
            </div>
        </div>
    </section>
</body>
</html>