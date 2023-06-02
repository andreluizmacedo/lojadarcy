<?php
  include_once("../../../includes/conexao.php");
  $categoria = $_POST["id"];

  $gravar = mysqli_query($conexao,"DELETE FROM tb_categorias 
                                   WHERE ID = '$categoria' ");
  
   if ($gravar){
    echo "Categoria Removida com sucesso";
   }else{
    echo "ERRO AO TENTAR REMOVER";
   }
?>  