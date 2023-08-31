<?php
    require "conexao.php";
    require "modelo\produto.php";
    require "repositorio\ProdutoRepositorio.php";

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $tipo = $_POST["tipo"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $imagem = $_POST["imagem"];

        $produto = new Produto(0, $tipo, $nome, $descricao, $imagem, $preco);

        $produtoRepositorio = new ProdutoRepositorio($conn);
        $produtoRepositorio->cadastrar($produto);
        header("Location: cadastrar-produtos-sucesso.php");
    }
?>