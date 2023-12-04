<?php

        include_once ("conexao.php");

        if(isset($_POST['update']))
        {
        	$id = $_POST['id'];
        	$fechamento =$_POST['Fechamento'];
            $proposta =  $_POST['proposta'];
            $nome =  $_POST['nome'];
            $telefone = $_POST['telefone']; 
            $cidade = $_POST['cidade'];
            $endereco = $_POST['endereco'];
            $observacao = $_POST['obs'];
            $vendedor = $_POST['vendedor'];
            $equipe = $_POST['equipe'];
            $status = $_POST['status'];


        	$status = "Fechado";


        	 $query = "update ordem set Fechametno = '$fechamento', status ='$status',proposta ='$proposta',nome='$nome',telefone='$telefone',cidade='$cidade',endereco='$endereco',obs ='$obs',vende  where id='$id'";
                          
              $teste = mysqli_query($con,$query);


        }
        header('Location: lista_geral.php');



?>