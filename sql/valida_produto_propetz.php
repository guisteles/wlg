<?php
    include 'conexao.php';
    $cod_produto_pr = $_POST['cod_produto_pr'];
    $nome_produto_pr = $_POST['nome_produto_pr'];
    $preco_produto_pr = $_POST['preco_produto_pr'];
    $categoria_produto_pr = $_POST['categoria_produto_pr'];
    $quantidade_estoque_pr = $_POST['quantidade_estoque_pr'];
    $sql = "INSERT INTO estoque_propetz (cod_produto_pr,nome_produto_pr,preco_produto_pr,categoria_produto_pr,quantidade_estoque_pr) VALUES ('".$cod_produto_pr."', '".$nome_produto_pr."', '".$preco_produto_pr."', '".$categoria_produto_pr."', '".$quantidade_estoque_pr."')";
    $res = mysqli_query($con,$sql) or die ('Erro ao tentar realizar o cadastro.');
    if($res){
        echo 'Produto cadastrado com sucesso!';
    }else{
        echo 'Erro no cadastro do produto.';
    }
    mysqli_close($con);
    header('location: form_produto_propetz.html');
?>