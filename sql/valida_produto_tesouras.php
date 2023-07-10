<?php
    include 'conexao.php';
    $cod_produto_te = $_POST['cod_produto_te'];
    $nome_produto_te = $_POST['nome_produto_te'];
    $preco_produto_te = $_POST['preco_produto_te'];
    $quantidade_estoque_te = $_POST['quantidade_estoque_te'];
    $sql = "INSERT INTO estoque_tesouras (cod_produto_te,nome_produto_te,preco_produto_te,quantidade_estoque_te) VALUES ('".$cod_produto_te."', '".$nome_produto_te."', '".$preco_produto_te."', '".$quantidade_estoque_te."')";
    $res = mysqli_query($con,$sql) or die ('Erro ao tentar realizar o cadastro.');
    if($res){
        echo 'Produto cadastrado com sucesso!';
    }else{
        echo 'Erro no cadastro do produto.';
    }
    mysqli_close($con);
    header('location: form_produto_tesouras.html');
?>