<?php
    include 'conexao.php';
    $cod_produto_tv = $_POST['cod_produto_tv'];
    $sql = "DELETE FROM estoque_tratyvet WHERE cod_produto_tv = '".$cod_produto_tv."';";
    $res = mysqli_query($con,$sql) or die('Erro ao tentar remover o cliente.');
    if($res){
        echo 'Produto removido com sucesso!';
    }else{
        echo 'Erro na remoção do produto';
    }
    mysqli_close($con);
    header('location: remover_produto_tratyvet.html');
?>