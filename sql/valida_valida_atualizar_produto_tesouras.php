<?php
    include 'conexao.php';
    $cod_produto_te = $_POST['cod_produto_te'];
    $nome_produto_te = $_POST['nome_produto_te'];
    $preco_produto_te = $_POST['preco_produto_te'];
    $quantidade_estoque_te = $_POST['quantidade_estoque_te'];
    $sql = "UPDATE estoque_tesouras SET nome_produto_te='$nome_produto_te',preco_produto_te='$preco_produto_te',quantidade_estoque_te='$quantidade_estoque_te' WHERE cod_produto_te='".$cod_produto_te."'";
    $res = mysqli_query($con,$sql) or die("Erro ao tentar realizar uma atualização");
    if($res){
        echo 'Atualização feita com sucesso!';
    }
    else{
        echo 'Erro na atualização de dados';
    }
    mysqli_close($con);
    header('location: ../produtos_tesouras.php');
?>
