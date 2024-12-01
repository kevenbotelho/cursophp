<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $n = $_GET["numero"] ?? 0;
            echo("<p>O antecessor de $n é " . $n-1 . "\n</p>");
            echo("<p>O sucessor de $n é ". $n+1 . "\n</p>")
        ?>
        <a href="javascript:history.go(-1)"><button>&#x2B05 Voltar</button></a>
    </main>
</body>
</html>