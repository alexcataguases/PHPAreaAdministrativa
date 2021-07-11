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

 $q=mysqli_query($con, "SELECT * FROM tblsorveteriapedidos"); 
        ?>
        <center>
            <table border=1>
                <tr><td>Cliente</td><td>Data</td><td>Endereço</td><td>Pedido</td><td>Total</td><td>Status</td></tr>
                <?php
                while ($row=mysqli_fetch_array($q)){		
                    echo("<tr><td>$row[cliente]</td><td>$row[dia]</td><td>$row[endereco]</td><td>$row[pedido]</td><td>$row[total]</td>
                    <td>
                    <form action=alterastatus.php?cod=$row[codigo]>
                    <select name=status>
                    <option value=$row[status]>$row[status]</option>
                    <option value=solicitado>Solicitado</option>
                    <option value=recebido>Recebido</option>
                    <option value=enviado>Envidado</option>
                    <option value=cancelado>Cancelado</option>
                    </select>
                    </form>
                    </td></tr>"); 
                }
                ?>
            </table>
        </center>