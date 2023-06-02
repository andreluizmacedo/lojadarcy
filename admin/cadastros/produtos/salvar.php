

<?php
//pega o texto e tranforma em variavel
    include_once("../../../includes/conexao.php");
    $zero = $_POST["prod"];
    $um = $_POST["titulo"];
    $dois = $_POST["descricao"];
    $tres = $_POST["preco"];
    $quatro = $_POST["estoque"];

    //manda
    $grava = mysqli_query($conexao, "INSERT INTO tb_produtos
    (ID_SUB_CATEGORIA, TITULO, DESCRICAO, PRECO, ESTOQUE) VALUES 
    ('$zero', '$um','$dois','$tres','$quatro')");
//devolve
    if ($grava){
        echo "Categoria gravada com sucesso";
    }else{
        echo "Error ao tentar gravar";
    }
?>