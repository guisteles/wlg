<?php
    include "conexao.php";
    $cod_produto = $_POST['cod_produto'];
    $sql = "SELECT * FROM estoque WHERE cod_produto = ".$cod_produto.";";
    $result = mysqli_query($con,$sql) or die("Erro ao retornar os dados");
    while($res = mysqli_fetch_array($result))
        {
            $cod_produto = $res['cod_produto'];
            $nome_produto = $res['nome_produto'];
            $preco_produto = $res['preco_produto'];
            $categoria_produto = $res['categoria_produto'];
            $marca_produto = $res['marca_produto'];
            $quantidade_estoque = $res['quantidade_estoque'];
        }
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema WLG</title>
        <!-- Bootstrap -->
        <link href="../bootstrap-5.2.0-dist/css/bootstrap.min.css"
            rel="stylesheet">
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <style>
        body{
          background-image: url("../imagens/fundo.jpg");
          padding: 0px;
          margin: 0px;
          border: 0px;
          max-width: 300px;
          max-height: 300px;
          font-family: Poppins;
            }
        .container-login{
          width: 100vw;
          height: calc(100vh - 80px);
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
        }
          .container-box{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            background-color: #fff;
          }
          .navbar {
            width: 100vw;
            height: 80px;
            background-color: #fff;
          }
          
        </style>
    <body>

        <div class="navbar shadow">
            <a class="navbar-brand" href="../principal.php">
                <img src="../imagens/logo.png" style="left: 5px; top: -5px;
                    position: absolute" alt="" height="95" class="d-inline-block
                    align-text-top">
            </a>
        </div>
        <div class="row">
        <div class="col">
        <div class="container-login">
            <div class="container-box" style="width: 1000px; height: 750px;position: relative">
            <form action="valida_valida_atualizar_produto_tesouras.php" method="POST">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <br>
        <h1 style="text-align: center">Atualização de Produto</h1>
        <br>
        <br>
        <div class="row mb-2">
            <input type="hidden" name="cod_produto" value="<?php echo $cod_produto;?>">
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="nome_produto" value="<?php echo $nome_produto_te;?>" placeholder="Nome do Produto" required />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="number"  class="form-control" name="preco_produto" value="<?php echo $preco_produto_te;?>" placeholder="Preço" required />
            </div>
            </div>
        </div>
        <br>
         <!-- Text input -->
         <div class="form-outline mb-2">
            <input type="number" class="form-control" name="quantidade_estoque" value="<?php echo $quantidade_estoque_te;?>" placeholder="Quantidade" required/>
        </div>
        <br>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-2">
            <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked required />
            <label class="form-check-label" for="form6Example8"> Está tudo correto? </label>
        </div>

        <!-- Submit button -->
        <button type="submit" name="atualizar" class="btn btn-primary btn-block mb-4">Atualizar</button>
        </form>
    </div>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>