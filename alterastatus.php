<?php
        include 'verifica.php';
        include 'conexao.php';
        $q=mysqli_query($con, "UPDATE tblsorveteriapedidos SET status='$_REQUEST[status]' where codigo=$_REQUEST[cod]"); 
        header('location:exibirpedidos.php');
?>