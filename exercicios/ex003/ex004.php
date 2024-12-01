<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        td{
            padding: 8px;
            border: 1px solid black;
            
        }
        table{
            border-collapse: collapse;
            letter-spacing: 0.7px;
        }
        #aspas{
            text-align: center;
        }
        .tr{
            background-color: lightgray;
        }
        .especial{
            font-weight: bold;
            text-align: center;
            display: block;
        }
        p{
            text-align: justify;
        }
        .tab{
            padding-left: 40px
        }
    </style>
</head>
<body>
    <h1>Strings</h1>
    <p>Para juntar duas strings <strong style="color: red;">use "."</strong></p>
    <table>
        <thead>
            <th>
                <tr>
                    <td id="aspas" colspan="4">"ASPAS"</td>
                </tr>
            </th>
        </thead>
        <tbody>
            <tr class="tr">
                <td>Double Quoted</td>
                <td>Single Quoted</td>
            </tr>
            <tr>
                <td><p>Escrever em aspas duplas (string): <br> <span class="especial">"Curso"</span></p></td>
                <td><p>Escrever em aspas simples (string): <br> <span class="especial">'Curso'</span></p></td>

            </tr>
            <tr>
                <td>Aspas duplas servem pra que o php interprete</td>
                <td>Aspas simples servem pra que o php não imterprete os códigos</td>
            </tr>
            <tr>
                <td>
                    <div>
                        <?php 
                            echo("Teste de caracter ( " . '\u{1F418}' . " ) :"." \u{1F418}");
                        ?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php 
                            echo("Teste de caracter ( " . '\u{1F418}' . " ) :".' \u{1F418}');
                        ?>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td>Heredoc</td>
                <td>Nowdoc</td>
            </tr>
            <tr>
                <td>Estrutura: <br> echo <<< TESTE <br>
            <span class="tab">$ano</span>
        <br>
        TESTE; <br> É que nem aspas duplas, é interpretado o conteúdo de dentro</td>
        <td>
        Estrutura: <br> echo <<< 'TESTE' <br>
            <span class="tab">$ano</span>
        <br>
        TESTE; <br> É que nem aspas simples, não é interpretado o conteúdo de dentro
        </td>
            </tr>
        </tbody>
    </table>
    <?php 
        const ESTADO = "PA";
        echo"Moro no \"Passado\" ". ESTADO . date('Y'); //sequencia de escape

        echo <<< FRASE
            $ano

        FRASE;
    ?>
</body>
</html>