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
        ?>

        <form action="inserir2.php" method="post" enctype="multipart/form-data">
            <p>
                <label>Produto</label>
                <input type="text" name="produto">
            </p>
            <p>
                <label>Tipo</label>
                <input type="text" name="tipo">
            </p>
            <p>
                <label>Preço</label>
                <input type="text" name="preco">
            </p>
        	
        	<p>
        	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
        Escolha o arquivo para upload: <input name="uploadedfile" type="file" /><br />
        	</p>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>