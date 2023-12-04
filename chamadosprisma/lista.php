<!DOCTYPE html>
<html lang="pt" dir="ltr"  encode="utf-8">
  <head>
    <meta charset="utf-8">

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
      <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <title>Monitoramento Prisma</title>
  </head>
  <body>
    <div class="container py-5">
       <div class="row">
 
               <!-- Fixed header table-->
               <div class="table-responsive">
                   <table class="table-striped table-responsive" style="text-align: center; font-size: 12px;">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Pendencias Suporte</button>
                       <thead class="thead-light">
                           <tr>
                              <th scope="col" class="col-1">Os</th>
                               <th scope="col" class="col-1">Nome</th>
                               <th scope="col" class="col-1">Endereço</th>
                               <th scope="col" class="col-1">Cidade</th>
                               <th scope="col" class="col-1">Telefone</th>
                               <th scope="col" class="col-1">Reclamação</th>
                               <th scope="col" class="col-1">Status</th>
                               <th scope="col" class="col-1">Abertura</th>
                               <th scope="col" class="col-1">Observação</th>
                               <th scope="col" class="col-1">Atualizar</th>
                       </thead>
                       <tbody>
                        <?php
                          include_once ("conexao.php");

                          $query = "select * from ordem where status like 'Pendente'";
                          
                          $teste = mysqli_query($con,$query);                                                   

                          while ($dados = mysqli_fetch_assoc($teste)) 
                          {
                            echo"<tr>";
                            echo"<td>".$dados['id']."</td>";
                            echo"<td>".$dados['nome']."</td>";
                            echo"<td>".$dados['endereco']."</td>";
                            echo"<td>".$dados['cidade']."</td>";
                            echo"<td>".$dados['telefone']."</td>";
                            echo"<td>".$dados['reclamacao']."</td>";
                            echo"<td>".$dados['status']."</td>";
                            echo"<td>".$dados['data']."</td>";
                            echo"<td>".$dados['obs']."</td>";
                            echo"<td>
                                  <a class='btn btn-primary' href='atualiza.php?id=$dados[id]'>

                                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                  </svg>
                                  </a>
                                  <a class='btn btn-danger' href='atualiza_obs.php?id=$dados[id]'>

                                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-justify-left' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z'/>
                                  </svg>

                                  </a>  


                                 </td>";

                          }
                        ?>
                       </tbody>
                   </table>
               </div>
             </div>
           </div>
       </div>
  </body>
</html>
