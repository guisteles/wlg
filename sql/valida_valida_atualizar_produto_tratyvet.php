<?php
    include 'conexao.php';
    $cod_produto_tv = $_POST['cod_produto_tv'];
    $nome_produto_tv = $_POST['nome_produto_tv'];
    $preco_produto_tv = $_POST['preco_produto_tv'];
    $categoria_produto_tv = $_POST['categoria_produto_tv'];
    $quantidade_estoque_tv = $_POST['quantidade_estoque_tv'];
    $sql = "UPDATE estoque_tratyvet SET nome_produto_tv='$nome_produto_tv',preco_produto_tv='$preco_produto_tv',categoria_produto_tv='$categoria_produto_tv',quantidade_estoque_tv='$quantidade_estoque_tv' WHERE cod_produto_tv='".$cod_produto_tv."'";
    $res = mysqli_query($con,$sql) or die("Erro ao tentar realizar uma atualização");
    if($res){
        echo 'Atualização feita com sucesso!';
    }
    else{
        echo 'Erro na atualização de dados';
    }
    mysqli_close($con);
    header('location: ../produtos_tratyvet.php');
?>
