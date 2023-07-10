<?php
    include 'conexao.php';
    $cod_produto_tv = $_POST['cod_produto_tv'];
    $nome_produto_tv = $_POST['nome_produto_tv'];
    $preco_produto_tv = $_POST['preco_produto_tv'];
    $categoria_produto_tv = $_POST['categoria_produto_tv'];
    $quantidade_estoque_tv = $_POST['quantidade_estoque_tv'];
    $sql = "INSERT INTO estoque_tratyvet (cod_produto_tv,nome_produto_tv,preco_produto_tv,categoria_produto_tv,quantidade_estoque_tv) VALUES ('".$cod_produto_tv."', '".$nome_produto_tv."', '".$preco_produto_pr."', '".$categoria_produto_tv."', '".$quantidade_estoque_tv."')";
    $res = mysqli_query($con,$sql) or die ('Erro ao tentar realizar o cadastro.');
    if($res){
        echo 'Produto cadastrado com sucesso!';
    }else{
        echo 'Erro no cadastro do produto.';
    }
    mysqli_close($con);
    header('location: form_produto_tratyvet.html');
?>