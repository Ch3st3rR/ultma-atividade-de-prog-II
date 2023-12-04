<?php
    
    include_once ("conexao.php");

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r($_POST['telefone']);
        //print_r($_POST['data_abertura']);
        //print_r($_POST['cidade']);
        //print_r($_POST['endereco']);
        //print_r($_POST['reclamacao']);
        $nome =  $_POST['nome'];
        $endereco = $_POST['vendas'];
        $cidade = $_POST['reclamacao'];
        $instalacao=$_POST['instalacao'];
        $servicos=$_POST['servicos'];


        include_once ("conexao.php");

        $result = mysqli_query($con, "INSERT INTO sugestao(nome,venda,comentario,instalacao,servicos) VALUES ('$nome','$endereco','$cidade','$instalacao','$servicos')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura de Ordens de serviço</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #dataabertura{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="sugestao.php" method="POST">
            <fieldset>
                <legend><b>Sugestão</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <p>Vendas:</p>
                <input type="radio" id="elogio" name="vendas" value="elogio" required>
                <label for="elogio">Elogio</label>
                <br>
                <input type="radio" id="Critica" name="vendas" value="Critica" required>
                <label for="Critica">Critica</label>
                <br>
                <input type="radio" id="outro" name="vendas" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <p>Instalação:</p>
                <input type="radio" id="elogio" name="instalacao" value="elogio" required>
                <label for="elogio">Elogio</label>
                <br>
                <input type="radio" id="Critica" name="instalacao" value="Critica" required>
                <label for="Critica">Critica</label>
                <br>
                <input type="radio" id="outro" name="instalacao" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <p>Serviços:</p>
                <input type="radio" id="elogio" name="servicos" value="elogio" required>
                <label for="elogio">Elogio</label>
                <br>
                <input type="radio" id="Critica" name="servicos" value="Critica" required>
                <label for="Critica">Critica</label>
                <br>
                <input type="radio" id="outro" name="servicos" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>
                <br>
                    <div class="inputBox">
                    <input type="text" name="reclamacao" id="reclamacao" class="inputUser" required>
                    <label for="endereco" class="labelInput">Deixe seu comentario</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>