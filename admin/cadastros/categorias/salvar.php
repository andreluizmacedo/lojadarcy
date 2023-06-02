<?php
  include_once("../../../includes/conexao.php");
  $categoria    = $_POST["txtCategoria"];
  $id_categoria = $_POST["id_alterar"]; 
  $alterar      = $_POST["alterando"];

  if ( $alterar == 1){
    
    $atualizar = mysqli_query($conexao,"update tb_categorias 
  SET DESCRICAO ='$categoria' WHERE ID = '$id_categoria' "); 
    if ($atualizar){
      echo "Categoria Atualizada com sucesso";
    }else{
      echo "ERRO AO TENTAR ATUALIZAR";
    }
    exit();
  }

  $gravar = mysqli_query($conexao,"INSERT INTO tb_categorias 
  (DESCRICAO) VALUES ('$categoria')");
  
   if ($gravar){
    echo "Categoria Gravada com sucesso";
   }else{
    echo "ERRO AO TENTAR GRAVAR";
   }
?>  