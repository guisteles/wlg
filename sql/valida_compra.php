<?php
    include 'conexao.php';
    $cod_compra = $_POST['cod_compra'];
    $empresa_compra = $_POST['empresa_compra'];
    $emissao_compra = $_POST['emissao_compra'];
    $valor_produto = $_POST['valor_produto'];
    $sql = "INSERT INTO compras_estoque (cod_produto,empresa_compra,emissao_compra,valor_produto) VALUES ('".$cod_produto."', '".$empresa_compra."', '".$emissao_compra."', '".$valor_produto."')";
    $res = mysqli_query($con,$sql) or die ('Erro ao tentar realizar a compra.');
    if($res){
        echo 'Compra realizada com sucesso!';
    }else{
        echo 'Erro na compra do produto.';
    }
    mysqli_close($con);
    header('location: form_compra.html');
?>