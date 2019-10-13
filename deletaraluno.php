<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `cadastro` WHERE id_aluno = $id";

$deletar = mysqli_query($conexao, $sql);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Aluno</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
          
    <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="index.php">
        Gym System
        </a>
        <p  style="color: #fff" style="margin-left:90px" style="margin-top:50px" > Olá, Recepcionista!</p>
    </nav>

    <div class="container" style="width: 600px" style="margin-top:  80px">
    <center> <h4 style="margin-top:20px"> Cadastrado excluido com sucesso </h4>
        <br>
        <br>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Home</a></center>
    </div>


