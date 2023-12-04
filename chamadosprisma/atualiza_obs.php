<?php

    include_once ("conexao.php");
   

    if(!empty($_GET['id']))
    {

        $id =$_GET['id'];

  



        $result = mysqli_query($con, "select * from  ordem where id =$id");
        if($result -> num_rows > 0)
        {
            while ($user_data = mysqli_fetch_assoc($result))

            {
                $nome =  $user_data['nome'];
                $endereco =  $user_data['endereco'];
                $status = "Pendente";
                $cidade = $user_data['cidade'];
                $proposta = $user_data['proposta'];

# code...
            }


        }

        else
        {
            header('Location: lista.php');
        }
  




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
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #update{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="edit_obs.php" method="POST">
            <fieldset>
                <legend><b>Atualização Ordens de serviço</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value ="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                <br><br>
                    <div class="inputBox">
                    <input type="text" name="Fechamento" id="Fechamento" class="inputUser"  required>
                    <label for="Fechamento" class="labelInput">Observação</label>
                <br><br>
                    <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser"  value ="<?php echo $endereco ?>"required>
                    <label for="endereco" class="labelInput">Endereço</label>
                <br><br>   
                    <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser"  value ="<?php echo $cidade ?>"required>
                    <label for="cidade" class="labelInput">Cidade</label>
                <br><br>
                    <div class="inputBox">
                    <input type="text" name="proposta" id="proposta" class="inputUser"  value ="<?php echo $proposta ?>"required>
                    <label for="proposta" class="labelInput">proposta</label>
                <br><br>           
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>