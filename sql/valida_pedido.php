<?php
    include 'conexao.php';
    $numero_pedido = $_POST['numero_pedido'];
    $cod_cliente = $_POST['cod_cliente'];
    $emissao_pedido = $_POST['emissao_pedido'];
    $valor_pedido = $_POST['valor_pedido'];
    $sql = "INSERT INTO compras_cliente (numero_pedido,cod_cliente,emissao_pedido,valor_pedido) VALUES ('".$numero_pedido."', '".$cod_cliente."', '".$emissao_pedido."', '".$valor_pedido."')";
    $res = mysqli_query($con,$sql) or die ('Erro ao tentar realizar o pedido.');
    if($res){
        echo 'Pedido realizado com sucesso!';
    }else{
        echo 'Erro na realização do pedido.';
    }
    mysqli_close($con);
    header('location: ../vendas.php');
?>