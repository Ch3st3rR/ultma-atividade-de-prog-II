<?php

        include_once ("conexao.php");

        if(isset($_POST['update']))
        {
        	$id = $_POST['id'];
        	$equipe =$_POST['equipe'];
            $agendamento =$_POST['Agendamento'];

        	$status = "Fechado";


        	 $query = "update instalacao set equipe = '$equipe', status ='$status', datafechamento ='$agendamento' where id='$id'";
                          
              $teste = mysqli_query($con,$query);


        }
        header('Location: instalacao.php');



?>