<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nome = $_GET["nome"] ?? "Sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome";
        $conta = 5+2/2;
        echo "<p>Olá, $nome $sobrenome</p>";
        echo"<p>$conta</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
    <input type="" name="" id="">
</body>
</html>