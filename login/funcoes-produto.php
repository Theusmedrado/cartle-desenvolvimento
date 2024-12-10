<?php
require "../includes/conecta.php";

// Usada em admin/noticia-insere.php
function inserirproduto($mysqli, $produto, $imagem, $categoria, $tipo, $descricao, $data, $valor)
{

    $conexao = "INSERT INTO produtos(produto,imagem,categoria,tipo,descricao,dia,valor)
            VALUES('$produto', '$imagem', '$categoria', '$tipo' ,'$descricao', '$data' , '$valor')";


    executarQuery($mysqli, $conexao);
}
?>
