<?php
    include 'conexao.php';
    $cod_cliente = $_POST['cod_cliente'];
    $sql = "DELETE FROM clientes WHERE cod_cliente = '".$cod_cliente."';";
    $res = mysqli_query($con,$sql) or die('Erro ao tentar remover o cliente.');
    if($res){
        echo 'Cliente removido com sucesso!';
    }else{
        echo 'Erro na remoção do cliente';
    }
    mysqli_close($con);
    header('location: remover_cliente.html');
?>