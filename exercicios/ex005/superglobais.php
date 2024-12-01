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
        <pre>
            <?php 
                setcookie("dia-da-semana" , "DOMINGO", time() + 36000);
                session_start();

                $_SESSION["teste"] = "FUNCIONOU";

                echo"<h1>SuperGlobal GET</h1>";
                var_dump($_GET);

                echo("<h1>SuperGlobal POST</h1>");
                var_dump($_POST);

                echo"<h1>SuperGlobal Request</h1>";

                echo"<h1>SuperGlobal Cookie</h1>";
                var_dump($_COOKIE);

                echo"<h1>SuperGlobal File</h1>";
                var_dump($GLOBALS);

                echo"<h1>SuperGlobal SESSION</h1>";
                var_dump($_SESSION);

                

                //foreach(getenv() as $c => $v){
                //    echo "<br> $c - $v ";
                //}
                
                echo"<h1>SuperGlobal SERVER</h1>";
                var_dump($_SERVER);

                echo"<h1>SuperGlobal GLobals</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>