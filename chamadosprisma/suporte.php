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
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $telefone = $_POST['telefone'];
        $reclamacao =$_POST['reclamacao'];
        $data = $_POST['dataabertura'];
        $proposta = $_POST['proposta'];
        $status = "Pendente";
        $obs ="";



        $result = mysqli_query($con, "INSERT INTO ordem(nome,endereco,cidade,telefone,reclamacao,status,obs,data,proposta) VALUES ('$nome','$endereco','$cidade','$telefone', '$reclamacao', '$status','$obs','$data','$proposta')");

        
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
        <form action="suporte.php" method="POST">
            <fieldset>
                <legend><b>Abertura de Ordens de serviço</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <label for="dataabertura"><b>Abertura:</b></label>
                <input type="date" name="dataabertura" id="dataabertura" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                    <div class="inputBox">
                    <input type="text" name="reclamacao" id="reclamacao" class="inputUser" required>
                    <label for="reclamacao" class="labelInput">reclamação</label>
                <br><br>
                    <div class="inputBox">
                    <input type="text" name="proposta" id="proposta" class="inputUser" required>
                    <label for="proposta" class="labelInput">proposta</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>