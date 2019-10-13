<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Aluno</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/3931701706.js" crossorigin="anonymous"></script>


        <style type="text/css">
            
            #tamformulario{
            width: 800px;   
            color: #555;
            font-size: 12px;
            }
         
            #titulo{
            width: 800px;   
            color: #761c19;
            font-size: 20px;  
            font: bold;
            text-align: center;
            }
        </style>
         
    </head>
    <body>
        
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"> <i class="fas fa-dumbbell"></i>
        Gym System
    </a>
        <p  style="color: #fff" style="margin-left:90px" style="margin-top:50px" > Olá, Recepcionista!</p>
    </nav>
        
 
        
    <div class="container" id="tamformulario" style='margin-top: 5px'>
    <form action="_inserir_aluno.php" method="post">

     <div class="container" id="titulo" style='margin-top: 20px'>
     <h3>Dados cadastrais</h3>
     </div>
            <br>
                 
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nomealuno" class="form-control" placeholder="Nome" required>
                </div>
                      
                <div class="form-row">
                    <div class="form-group col-md-6">  
                    <label>RG</label>
                    <input type="text" name="rgaluno" class="form-control" placeholder="RG" required>
                  </div>     
                 <div class="form-group col-md-6">
                    <label>CPF</label>
                    <input type="number" name="cpfaluno" class="form-control" placeholder="CPF" required>
                 </div>
                </div>     
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" name="enderecoaluno" class="form-control" placeholder="Digite o endereço com o número" require>
                </div>

                <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Digite o bairro" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-9 mb-2">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Digite a cidade" required>
                    </div>

                <div class="form-group col-md-3 mb-2">
                    <label>UF</label>
                    <select class="form-control" name="uf" required>
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
    
    <div class="form-row" id="tamformulario"  >
        <div class="form-group col-md-4 mb-3">
                    <label>Plano</label>
                    <select class="form-control" name="tipoplano" required>
                        <option>Mensal</option>
                        <option>Anual</option>
        </select>
                </div>
                
               
        <div class="form-group col-md-4 mb-3">
                    <label>Forma de pagamento</label>
                    <select class="form-control" name="tipopagamento" required>
                        <option>Dinheiro</option>
                        <option>Cartão</option>
        </select>
                </div>  

         <div class="form-group col-md-4 mb-3">
                <label>Valor</label>
                    <input type="float" name="valorpago" class="form-control" placeholder="R$ 000" required>
            </div>
        </div>
          
        <br>
            <div style="text-align: right">
                <button type="button" class="btn btn-default"><a href="index.php">Cancelar</button></a> 
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <br>
                <br>
                
            </div>
       
      </form>
    </div>
  

        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
