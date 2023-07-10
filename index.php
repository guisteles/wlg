<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WLG Controle</title>
        <!-- Bootstrap -->
        <link href="bootstrap-5.2.0-dist/css/bootstrap.min.css"
            rel="stylesheet">
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <style>
        body{
          background-image: url("imagens/fundo.png");
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
            <a class="navbar-brand" href="#">
                <img src="imagens/logo.png" style="left: -7px; top: -13px;
                    position: absolute" alt="" height="105" class="d-inline-block
                    align-text-top">
            </a>
        </div>
        <div class="container-login">
            <div class="container-box" style="width: 850px; height: 450px;position: relative">
                <form action="" method="POST">
                    <h1 style="top: -10px; position: relative">Sistema WLG</h1>
                    <p style="top: 85px; right: 70px; position: relative">Login</p>
                    <p style="top: 110px; right: 71px; position: relative">Senha</p>
                    <div>
                        <input type="email" class="form-control" name="email"
                            placeholder="nome@exemplo.com">
                    </div>
                    <br>
                    <div>
                        <input type="password" class="form-control" name="senha"
                            placeholder="Senha">
                    </div>
                    <br>
                    <br>
                    <div style="top: 15px; right: -65px; position: relative; text-align: left">
                        <button type="submit" class="btn btn-primary" id="toastbtn">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php //Inicia PHP
            if(isset($_POST['email']) && isset($_POST['senha'])){ //Se existir algo no login e no senha, continuar
                if($_POST['email']=="lucidosantos@gmail.com" && $_POST['senha']=="223842WLG"){ //Se o login for guiteles e se a senha for 123
                    header('location: principal.php'); //Direcionar ao tarefas.php
                }
                else{ //Se não
                    echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="10 0 20 36">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                  </svg>
                  <div class="alert alert-danger d-flex align-items-center" role="alert" style="width: 300px; left: 42vw; top: -57vh; position: relative">
                  <svg class="bi flex-shrink-0 me-2" width="10" height="14" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Usuário Incorreto, tente novamente.
                  </div>
                </div>';
                }
            }
            ?>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>