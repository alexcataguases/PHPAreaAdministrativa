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
        
        $q=mysqli_query($con, "SELECT * FROM tblprodutos"); 
        ?>
        
        <center>
            <table border=1>
                <tr><td>Foto</td><td>Código</td><td>Produto</td><td>Tipo</td><td>Preço</td><td>Deletar</td></tr>
                <?php
                while ($row=mysqli_fetch_array($q)){		
                    echo("<tr><td><img src=uploads/foto$row[codigo].jpg width=50 height=50></td><td>$row[codigo]</td><td>$row[produto]</td><td>$row[tipo]</td><td>$row[preco]</td><td><a href=deletar.php?cod=$row[codigo]>X</td></tr>"); 
                }
                ?>
            </table>
        </center>
    </body>
</html>