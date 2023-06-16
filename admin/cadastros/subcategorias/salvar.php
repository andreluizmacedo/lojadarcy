<?php
  $categoria       = $_POST["txtCategoria"];
  $subCategoria    = $_POST["txtSubCategoria"];
  $alterar         = $_POST["alterando"];
  $id_subcategoria = $_POST["id_alterar"]; 
  include_once("../../../includes/conexao.php");

    if ( $alterar == 1){
        $atualizar = mysql_query($conexao,
        "update tb_sub_categorias ID_CATEGORIA = '$categoria', 
                                  DESCRICAO = '$subCategoria' 
                              where ID = '$id_subcategoria'"); 

        if ($atualizar){
           echo "SubCategoria Atualizada com sucesso";
        }else{
           echo "ERRO AO TENTAR ATUALIZAR";
        }
        exit();
    }else{
        $inserir = mysqli_query($conexao,"INSERT INTO tb_sub_categorias
           (ID_CATEGORIA, DESCRICAO) VALUES ('$categoria','$subCategoria')");
        
        if ($inserir){
            echo "SubCategoria inserida com sucesso!";
        }else{
            echo "Erro ao tentar inserir SubCategoria";
        }

    }
?>