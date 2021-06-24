<?php
        include 'verifica.php';
?>
<html>
    <head>
        <title>Sistema Administrativo</title>
    </head>
    <body>
        <?php
        include 'conexao.php';
        include 'menu.php';

        $q=mysqli_query($con, "DELETE FROM tblprodutos where codigo=$_REQUEST[cod]"); 
        ?>
        
        <center>
        Registro <?php echo $_REQUEST["cod"];?> excluído.
        </center>
    </body>
</html>