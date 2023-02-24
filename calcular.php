<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora em PHP</title>
</head>
<body>

<div class="container">
    <div class="box-result">
        <span class="result">

            <?php

                require_once('classes/Calculadora.php');

                // Aqui estamos pegando os valores do formulario
                $numero1 = $_POST['num1'];
                $numero2 = $_POST['num2'];
                $operacao = $_POST['operacao'];

                // Objeto
                $calculadora = new Calculadora();

                // Setando os valores
                $calculadora->setNumero1($numero1);
                $calculadora->setNumero2($numero2);

                // Verificando qual operacao foi selecionada
                switch($operacao){
                    case 'somar':
                        $calculadora->somar();
                        break;
                    case 'subtrair':
                        $calculadora->subtrair();
                        break;
                    case 'multiplicar':
                        $calculadora->multiplicar();
                        break;
                    case 'dividir':
                        $calculadora->dividir();
                        break;    
                    default:
                        echo 'Operador inválido';
                        break;
                }
                
                echo $calculadora->getTotal();

            ?>
        </span>

        <div class="btn">
            <a href="index.html">Voltar</a>
        </div>
    </div>
</div>
</body>
</html>