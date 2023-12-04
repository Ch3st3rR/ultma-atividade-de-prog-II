<?php

        include_once ("conexao.php");

        if(isset($_POST['update']))
        {
        	$id = $_POST['id'];
        	$maodeobraestimada =$_POST['maodeobraestimada'];
            $maodeobrausada =$_POST['maodeobrausada'];
            $materialusado =$_POST['materialusado'];
        	$materialestimado =$_POST['materialestimado'];


        	 $query = "update instalacao set maodeobraestimada = '$maodeobraestimada',  maodeobrausada ='$maodeobrausada',materialusado ='$materialusado', materialestimado ='$materialestimado' where id='$id'";
                          
              $teste = mysqli_query($con,$query);


        }
        header('Location: atualizaprecos.php');



?>