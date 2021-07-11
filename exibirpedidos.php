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
                    
                    if($row["status"]=="cancelado")$cor="#ff0000";
                    if($row["status"]=="recebido")$cor="#0000ff";
                    if($row["status"]=="enviado")$cor="#00ff00";
                    if($row["status"]=="solicitado")$cor="#ffff00";

                    echo("<tr bgcolor=$cor><td>$row[cliente]</td><td>$row[dia]</td><td>$row[endereco]</td><td>$row[pedido]</td><td>$row[total]</td>
                    <td>
                    <form action=alterastatus.php>
                    <input type=hidden name=cod value=$row[codigo]>
                    <select name=status  onchange='this.form.submit()'>
                    <option value=$row[status]>$row[status]</option>
                    <option value=solicitado>solicitado</option>
                    <option value=recebido>recebido</option>
                    <option value=enviado>envidado</option>
                    <option value=cancelado>cancelado</option>
                    </select>
                    </form>
                    </td></tr>"); 
                }
                ?>
            </table>
        </center>