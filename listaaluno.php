<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Aluno</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/3931701706.js" crossorigin="anonymous"></script>

    </head>
    <body>
        
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        Gym System
    </a>
        <p  style="color: #fff" style="margin-left:90px" style="margin-top:50px" > Olá, Recepcionista!</p>
    </nav>        
        
        
        
        <div class="container" style="margin-top: 40px" style="width:400px">
            
            <h3>Lista de Alunos</h3>
            <br>
            <table class="table" width="100%">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RG</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">UF</th>
                    <th scope="col">Plano</th>
                    <th scope="col">Ação</th>
                </tr>
              </thead>
              
                    <?php
                        include 'conexao.php';
                        $sql= "SELECT * FROM `cadastro`";
                        $busca = mysqli_query($conexao, $sql);
                        while ($array = mysqli_fetch_array($busca)){
                            $id_aluno = $array['id_aluno'];
                            $nomealuno = $array['nomealuno'];
                            $rgaluno = $array['rgaluno'];
                            $cpfaluno = $array['cpfaluno'];
                            $enderecoaluno = $array['enderecoaluno'];
                            $bairro = $array['bairro'];
                            $cidade = $array['cidade'];
                            $uf = $array['uf'];
                            $tipoplano = $array['tipoplano'];
                            
                    ?>
                <tr>
                    <td><?php echo $id_aluno ?></td>
                    <td><?php echo $nomealuno ?></td>
                    <td><?php echo $rgaluno ?></td>
                    <td><?php echo $cpfaluno ?></td>
                    <td><?php echo $enderecoaluno ?></td>
                    <td><?php echo $bairro ?></td>
                    <td><?php echo $cidade ?></td>
                    <td><?php echo $uf ?></td>
                    <td><?php echo $tipoplano ?></td>
                    
                    <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editaraluno.php?id=<?php echo $id_aluno ?>;" role="button"><i class="far fa-edit"></i></a>
                        
                        <a class="btn btn-danger btn-sm" style="color: #fff" href="deletaraluno.php?id=<?php echo $id_aluno ?>;" role="button"><i class="far fa-trash-alt"></i></a>
                    </td>
                    
                        <?php } ?>
                </tr>
           
        </table>


            <div style="text-align: right">
                <button type="submit" class="btn btn-success"><a style="color: #fff" href="adicionaraluno.php">Novo aluno</a></button>
                <br>
                <br>
                
            </div>               
            
            
            
        </div>
                
        
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    </body>
