<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
    <style>
       /*body{
            cursor: url("diamond.png") , auto;
        }*/
    </style>
</head>
<body>
    <h1>CATEGORIA DOS TIPOS PRIMITIVOS</h1>
    <h2 class="categoria">Escalares</h2>
    <h3>String</h3>
    <p>É uma cadeia de caracteres</p>
    <h3>Int ou Integer</h3>
    <p>Números Inteiros</p>
    <h3>Float, Double ou Real (a partir do 7.4, real deixou de existir)</h3>
    <p>Números com ponto flutuante, ou número com vírgula</p>
    <h3>Bool ou Boolean</h3>
    <p>Aceita os valores verdadeiro (TRUE) e falso (FALSE)</p>


    <h2 class="categoria">Compostos</h2>
    <h3>Array</h3>
    <h3>Object</h3>


    <h2 class="categoria">Especiais</h2>
    <h3>Null</h3>
    <h3>Resource</h3>
    <h3>callabe</h3>
    <h3>Mixed/h3>
    <h2>Teste de Tipos Primitivos</h2>
    <?php 
        //0x = hexadecimal
        //0b = binario
        //0 = octal
        //$num = 10;
        //echo "O valor da variável é $num"

        //var_dump = mostra todas as informações disponíveis de uma variavel (tipos primitivos)
        //$v = true;
        //var_dump($v)

        //$num = (float)3e2; //forcei ele ser considerado int (coersão) // 3 * 10 ^ 2
        //var_dump($num); // sempre que utiliza potencas, ele é considerado como float

        //$num = false;
        //echo " O valor é $num";

        //$vet = (Int)[6, 2, 9, 6, 7, 8];
        //echo "O vetor é $vet"

        class Pessoa{
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)


    ?>
</body>
</html>