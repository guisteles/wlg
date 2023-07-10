<?php
    include 'conexao.php';
    $cod_produto_te = $_POST['cod_produto_te'];
    $sql = "DELETE FROM estoque_tesouras WHERE cod_produto = '".$cod_produto_te."';";
    $res = mysqli_query($con,$sql) or die('Erro ao tentar remover o cliente.');
    if($res){
        echo 'Produto removido com sucesso!';
    }else{
        echo 'Erro na remoção do produto';
    }
    mysqli_close($con);
    header('location: remover_produto_tesouras.html');
?>