<?php
    include 'conexao.php';
    $cod_produto_pr = $_POST['cod_produto_pr'];
    $sql = "DELETE FROM estoque_propetz WHERE cod_produto = '".$cod_produto_pr."';";
    $res = mysqli_query($con,$sql) or die('Erro ao tentar remover o cliente.');
    if($res){
        echo 'Produto removido com sucesso!';
    }else{
        echo 'Erro na remoção do produto';
    }
    mysqli_close($con);
    header('location: remover_produto_propetz.html');
?>