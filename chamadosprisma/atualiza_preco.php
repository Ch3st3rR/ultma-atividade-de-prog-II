<?php

    include_once ("conexao.php");
   

    if(!empty($_GET['id']))
    {

        $id =$_GET['id'];




        $result = mysqli_query($con, "select * from  instalacao where id =$id");
        if($result -> num_rows > 0)
        {
            while ($user_data = mysqli_fetch_assoc($result))

            {
                //print_r($user_data);
                $proposta =  $user_data['proposta'];
                $nome =  $user_data['nome'];
                $maodeobraestimada = $user_data['maodeobraestimada']; 
                $maodeobrausada = $user_data['maodeobrausada'];
                $materialestimado = $user_data['materialestimado'];
                $materialusado = $user_data['materialusado'];


            }


        }

        else
        {
            header('Location: lista_geral.php');
        }
  




    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Geral</title>
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
        <form action="edit_preco.php" method="POST">
            <fieldset>
                <legend><b>Atualização Valores</b></legend>
                <br>
                <br>

                    <div class="inputBox">
                    <input type="text" name="proposta" id="proposta" class="inputUser"value ="<?php echo $proposta ?>" required>
                    <label for="proposta" class="labelInput">Proposta</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser"value ="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="maodeobraestimada" id="maodeobraestimada" class="inputUser" required>
                    <label for="maodeobraestimada" class="labelInput">Mao de obra estimada</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="maodeobrausada" id="maodeobrausada" class="inputUser" required>
                    <label for="maodeobrausada" class="labelInput">Mao de obra usada</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="materialestimado" id="materialestimado" class="inputUser" required>
                    <label for="materialestimado" class="labelInput">Material estimado</label>
                </div>
                <br><br>
                    <div class="inputBox">
                    <input type="text" name="materialusado" id="materialusado" class="inputUser" required>
                    <label for="materialusado" class="labelInput">Material usado</label>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>