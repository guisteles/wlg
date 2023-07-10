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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
          background-image: url("../imagens/fundo.png");
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
            <div class="container-box" style="width: 1050px; height: 750px;position: relative">
            <main>
            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabela de Clientes
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Código da Compra</th>
                                            <th>Empresa da Compra</th>
                                            <th>Emissão</th>
                                            <th>Valor da Compra</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Código da Compra</th>
                                            <th>Empresa da Compra</th>
                                            <th>Emissão</th>
                                            <th>Valor da Compra</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                        <?php //Inicia PHP
                                            include "conexao.php";
                                            $sql = "SELECT * FROM compras_estoque";
                                            $result = mysqli_query($con,$sql) or die("Erro ao retornar dados");
                                            while($res = mysqli_fetch_array($result))
                                            {
                                                echo" <td>".$cod_compra = $res['cod_compra']."</td>";
                                                echo"  <td>".$res['empresa_compra']."</td>";
                                                echo"  <td>".$res['emissao_compra']."</td>";
                                                echo"  <td>".$res['valor_produto']."</td>";
                                                echo "   </tr>";
                                            }
                                        echo'  </tbody>';
                                        mysqli_close($con);
                                    echo'   </table>';
                                   ?>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>