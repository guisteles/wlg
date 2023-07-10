<?php
    include 'conexao.php';
    $cod_produto_pr = $_POST['cod_produto_pr'];
    $nome_produto_pr = $_POST['nome_produto_pr'];
    $preco_produto_pr = $_POST['preco_produto_pr'];
    $categoria_produto_pr = $_POST['categoria_produto_pr'];
    $quantidade_estoque_pr = $_POST['quantidade_estoque_pr'];
    $sql = "UPDATE estoque SET nome_produto_pr='$nome_produto_pr',preco_produto_pr='$preco_produto_pr',categoria_produto_pr='$categoria_produto_pr',quantidade_estoque_pr='$quantidade_estoque' WHERE cod_produto_pr='".$cod_produto_pr."'";
    $res = mysqli_query($con,$sql) or die("Erro ao tentar realizar uma atualização");
    if($res){
        echo 'Atualização feita com sucesso!';
    }
    else{
        echo 'Erro na atualização de dados';
    }
    mysqli_close($con);
    header('location: ../produtos_propetz.php');
?>
