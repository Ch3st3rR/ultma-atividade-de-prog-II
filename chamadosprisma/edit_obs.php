<?php

include_once ("conexao.php");

        if(isset($_POST['update']))
        {
        	$id = $_POST['id'];
        	$teste =$_POST['Fechamento'];
            $endereco =$_POST['endereco'];
            $cidade = $_POST['cidade'];
            $proposta = $_POST['proposta'];
        	$status = "Pendente";


        	 $query = "update ordem set obs = '$teste',endereco ='$endereco',proposta='$proposta', cidade='$cidade', status ='$status' where id='$id'";
                          
              $teste = mysqli_query($con,$query);


        }
        header('Location: lista.php');



?>