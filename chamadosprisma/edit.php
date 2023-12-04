<?php

        include_once ("conexao.php");

        if(isset($_POST['update']))
        {
        	$id = $_POST['id'];
        	$fechamento =$_POST['Fechamento'];

        	$status = "Fechado";


        	 $query = "update ordem set obs = '$fechamento', status ='$status' where id='$id'";
                          
              $teste = mysqli_query($con,$query);


        }
        header('Location: lista.php');



?>