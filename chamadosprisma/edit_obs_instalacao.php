<?php

        include_once ("conexao.php");


        if(isset($_POST['update']))
        {
        	$id = $_POST['id'];
        	$fechamento =$_POST['Fechamento'];
        	$data =$_POST['Agendamento'];

        	$status = "Pendente";


        	 $query = "update instalacao set obs = '$fechamento', status ='$status' ,datafechamento='$data' where id='$id'";
                          
              $teste = mysqli_query($con,$query);


        }
        header('Location: lista_instalacao.php');



?>