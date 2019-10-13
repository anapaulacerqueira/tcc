<?php

include 'conexao.php';
date_default_timezone_set('America/Sao_Paulo');

$id = $_POST['id'];
$nomealuno = $_POST ['nomealuno'];
$rgaluno =  $_POST['rgaluno'];
//$cpfaluno =  $_POST['cpfaluno'];
$enderecoaluno =  $_POST['enderecoaluno'];
$bairro =  $_POST['bairro'];
$cidade =   $_POST['cidade'];
$uf =   $_POST['uf'];
$tipoplano = $_POST['tipoplano'];
$tipopagamento = $_POST['tipopagamento'];
$valorpago = $_POST['valorpago'];
$datapagamento = date("d.m.y");
$proximopagamento = date('d-m-y', strtotime("+1 month"));


$sql = "UPDATE `cadastro` SET `nomealuno`='$nomealuno',`rgaluno`='$rgaluno',"
        . "`enderecoaluno`='$enderecoaluno',`bairro`='$bairro',`cidade`='$cidade',`uf`='$uf',`tipoplano`='$tipoplano',"
        . "`tipopagamento`='$tipopagamento',`valorpago`='$valorpago',`datapagamento`='$datapagamento',`proximopagamento`='$proximopagamento' WHERE id_aluno=$id";

$atualizar = mysqli_query($conexao, $sql);



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
    <center> <h4 style="margin-top:20px"> Cadastro atualizado com sucesso </h4>
        
        <br>
        <br>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Home</a></center>
    </div>
        




