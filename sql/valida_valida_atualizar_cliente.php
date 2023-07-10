<?php
    include 'conexao.php';
    $cod_cliente = $_POST['cod_cliente'];
    $nome_cliente = $_POST['nome_cliente'];
    $estado_cliente = $_POST['estado_cliente'];
    $cidade_cliente = $_POST['cidade_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $endereco_cliente = $_POST['endereco_cliente'];
    $cep_cliente = $_POST['cep_cliente'];
    $tel_cliente = $_POST['tel_cliente'];
    $sql = "UPDATE clientes SET nome_cliente='$nome_cliente',estado_cliente='$estado_cliente',cidade_cliente='$cidade_cliente',email_cliente='$email_cliente',endereco_cliente='$endereco_cliente',cep_cliente='$cep_cliente',tel_cliente='$tel_cliente' WHERE cod_cliente='".$cod_cliente."'";
    $res = mysqli_query($con,$sql) or die("Erro ao tentar realizar uma atualização");
    if($res){
        echo 'Atualização feita com sucesso!';
    }
    else{
        echo 'Erro na atualização de dados';
    }
    mysqli_close($con);
    header('location: visualizar_cliente.php');
?>