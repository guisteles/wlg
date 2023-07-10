<?php
    include 'conexao.php';
    $cod_produto_michel = $_POST['cod_produto_michel'];
    $cod_produto_tv = $_POST['cod_produto_tv'];
    $cod_produto_pr = $_POST['cod_produto_pr'];
    $cod_produto_te = $_POST['cod_produto_te'];
    $data_michel = $_POST['data_michel'];
    $sql = "INSERT INTO produtos_michel (cod_produto_michel,cod_produto_tv,cod_produto_pr,cod_produto_te,data_michel) VALUES ('".$cod_produto_michel."', '".$cod_produto_tv."', '".$cod_produto_pr."', '".$cod_produto_te."'. '".$data_michel."')";
    $res = mysqli_query($con,$sql) or die ('Erro ao tentar realizar o pedido.');
    if($res){
        echo 'Pedido realizado com sucesso!';
    }else{
        echo 'Erro na realização do pedido.';
    }
    mysqli_close($con);
    header('location: ../vendas_michel.php');
?>