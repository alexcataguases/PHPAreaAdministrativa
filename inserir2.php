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

        
        $produto=$_POST['produto'];
        $tipo=$_POST['tipo'];
        $preco=$_POST['preco'];
        
        $sql = "INSERT INTO tblprodutos(produto, tipo, preco)VALUES ('$produto', '$tipo', $preco)";
        
        echo"<center>";
        
        if (mysqli_query($con, $sql)) {
          echo "Registro inserido com sucesso!<br><br>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        
        $ultimoCodigo = $con->insert_id;
        
        
        //UPLOAD DA IMAGEM
        
        $endereco = "uploads/";
        
        $target_path = $endereco . basename( $_FILES['uploadedfile']['name']); 
        
        $novoNome='foto'.$ultimoCodigo.'.jpg';
        
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $endereco.$novoNome)) {
            echo "<br>Arquivo<b> ".  $endereco.$novoNome. 
            " </b>enviado com sucesso";
        } else{
            echo "<br>A imagem não foi enviada.";
        }
        
        echo"</center>";
        ?>
    </body>
</html>