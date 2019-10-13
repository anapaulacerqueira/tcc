<?php

include 'conexao.php';

$id =  $_GET['id'];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Aluno</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style type="text/css">
            
            #tamformulario{
            width: 700px;   
            color: #555;
            font-size: 12px;
            }
         
            #titulo{
            width: 600px;   
            color: #761c19;
            font-size: 20px;  
            font: bold;
            text-align: center;
            }
        </style>
        
        
    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        Gym System
    </a>
        <p  style="color: #fff" style="margin-left:90px" style="margin-top:50px" > Olá, Recepcionista!</p>
    </nav>        
        
    <div class="container" id="tamformulario" style='margin-top: 5px'>
    <div class="container" id="titulo" style='margin-top: 20px'>
    <h3>Dados cadastrais</h3>
    </div>
    <form action="_atualizar_aluno.php" method="post">
        <?php
        $sql= "SELECT * FROM `cadastro` WHERE id_aluno =$id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)) {
                $nomealuno = $array['nomealuno'];
                $rgaluno = $array['rgaluno'];
                $cpfaluno = $array['cpfaluno'];
                $enderecoaluno = $array['enderecoaluno'];
                $bairro = $array['bairro'];
                $cidade = $array['cidade'];
                $uf = $array['uf'];
                $tipoplano = $array['tipoplano'];
                $tipopagamento = $array['tipopagamento'];
                $valorpago = $array['valorpago'];
                $datapagamento = $array['datapagamento'];
                $proximopagamento = $array['proximopagamento'];
        ?>
            <br>
                <div class="form-group">
                  <input type="number" name="id" class="form-control" value="<?php echo $id?>" style="display: none">
                </div>    
            
                
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nomealuno" class="form-control" value="<?php echo $nomealuno ?>">
                </div>
                      
                <div class="form-row">
                  <div class="form-group col-md-6">  
                    <label>RG</label>
                    <input type="text" name="rgaluno" class="form-control" value="<?php echo $rgaluno ?>">
                  </div>     
                 <div class="form-group col-md-6">
                    <label>CPF</label>
                    <input type="number" name="cpfaluno" class="form-control" value="<?php echo $cpfaluno?>"  disabled>
                 </div>
                </div>     
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" name="enderecoaluno" class="form-control" value="<?php echo $enderecoaluno ?>">
                </div>

                <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" value="<?php echo $bairro ?>">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-9 mb-2">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" value="<?php echo $cidade ?>">
                    </div>

                <div class="form-group col-md-3 mb-2">
                    <label>UF</label>
                    <select class="form-control" name="uf" value="<?php echo $uf ?>">
                        <option>AC</option>
                        <option>AL</option>
                        <option>AM</option>
                        <option>AP</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MG</option>
                        <option>MS</option>
                        <option>MT</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>PR</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>RS</option>
                        <option>SC</option>
                        <option>SE</option>
                        <option>SP</option>
                        <option>TO</option>

                    </select>
                </div>
                </div>
         
    <div class="container" id="titulo" style='margin-top: 20px'>
        <h3>Dados de Pagamento</h3>
        <br>
    </div>

    <div class="form-row" id="tamformulario">
        <div class="form-group col-md-4 mb-3">
                    <label>Plano</label>
                    <select class="form-control" name="tipoplano" value="<?php echo $tipoplano?>">
                        <option>Mensal</option>
                        <option>Anual</option>
        </select>
        </div>        
        

               
        <div class="form-group col-md-4 mb-3">
                    <label>Forma de pagamento</label>
                    <select class="form-control" name="tipopagamento"  value="<?php echo $tipopagamento?>">
                        <option>Dinheiro</option>
                        <option>Cartão</option>
                     </select>
        </div>         
   
         <div class="form-group col-md-4 mb-3">
                <label>Valor</label>
                    <input type="float" name="valorpago" class="form-control" value="<?php echo $valorpago?>">
         </div>
        </div>        
        <div style="text-align: right">
                <button type="button" class="btn btn-default"><a href="index.php">Cancelar</button></a> 
                <button type="submit" class="btn btn-success">Atualizar</button>
        </div>
        <?php } ?>
  
            </form>
        </div>
        
      
        
       
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>
