<?php
    include 'conexao.php';
    $nome_cliente = $_POST['nome_cliente'];
    $estado_cliente = $_POST['estado_cliente'];
    $cidade_cliente = $_POST['cidade_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $endereco_cliente = $_POST['endereco_cliente'];
    $cep_cliente = $_POST['cep_cliente'];
    $tel_cliente = $_POST['tel_cliente'];
    $sql = "INSERT INTO clientes (nome_cliente,estado_cliente,cidade_cliente,email_cliente,endereco_cliente,cep_cliente,tel_cliente) VALUES ('".$nome_cliente."', '".$estado_cliente."', '".$cidade_cliente."', '".$email_cliente."', '".$endereco_cliente."', '".$cep_cliente."', '".$tel_cliente."')";
    $res = mysqli_query($con,$sql) or die ('Erro ao tentar realizar o cadastro.');
    if($res){
        echo 'Cliente cadastrado com sucesso!';
    }else{
        echo 'Erro no cadastro do cliente.';
    }
    mysqli_close($con);
    header('location: form_cliente.html');
?>