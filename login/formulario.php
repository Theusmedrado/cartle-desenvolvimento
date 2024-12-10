<?php 
require "../includes/cabecalho.php"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../home/estilo.css">
    <style>
        *{
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        form{
            text-align: center;
            padding: 3% 0%;
            border: solid 4px #1d7373;
            margin: 1% 30%;
            color: #1d7373;
        }
        .enviar{
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .label,.formulario{
           padding: 2%;
           width: 60%;
          margin: auto;
          border-radius: 5px;
        }
        .descricao{
            padding: 5%;

        }
        .botao{
            background-color: #1d7373;
            color: #fff;
            padding: 2% 6%;
            width: auto;
            border-radius: 30px;
            cursor: pointer;
         
        }
      
    </style>
</head>
<body>
    <section>
        <h1>Registro de Produtos</h1>
        <form action="" autocomplete="off" enctype="multipart/form-data" method="post" name="inserir-formulario">
            <div class="enviar">
            <label class="label">nome do produto:</label ><input type="text" name="produto-formulario" class="produto formulario">
            <br>
            <label class="label">imagem:</label><input type="file" name="imagem-formulario" class="imagem formulario">
            <br>
            <label class="label">categoria:</label><input type="text" name="categoria-formulario" class="categoria formulario">
            <br>
            <label class="label">tipo:</label><input type="text" name="tipo-formulario" class="tipo formulario">
            <br>
            <label class="label">data</label><input type="date" name="data-formulario" class="data formulario">
            <br>
            <label class="label">descrição:</label><textarea type="text" name="descricao-formulario" placeholder="máximo 400 caracteres.." class="descricao formulario"></textarea>
            <br>
            <label class="label">valor:</label><input type="number" name="valor-formulario" class="valor formulario">
            <br>
            <input type="submit" value="registrar" class="botao formulario" >
        </div>
        </form>
    </section>

    <footer>
    <?php require "../includes/rodape.php" ?>
    </footer>
</body>
</html>
