<table class="table">
    <tr>
        <th>Categoria</th>
        <th>SubCategoria</th>
        <th>Alterar/Apagar</th>
    </tr>
    <?php
      include_once("../../../includes/conexao.php");
      $listar = mysqli_query($conexao,"select ts.ID, tc.DESCRICAO as CATEGORIA, ts.DESCRICAO as SUBCATEGORIA from
      tb_sub_categorias ts
      INNER JOIN tb_categorias tc on tc.ID = ts.ID_CATEGORIA");
      
      while ($linha = mysqli_fetch_assoc($listar)){
        echo '<tr>';
        echo '<td><input type="hidden" id="id_subcategoria" value="'.$linha["ID"].'">'.$linha["CATEGORIA"].'</td>';
        echo '<td>'.$linha["SUBCATEGORIA"].'</td>';
        echo '<td><i class="fa-solid fa-pen-to-square btnAlterar"></i> / 
        <i class="fa-regular fa-trash-can btnExcluir"></i></td>';
        echo '</tr>';
      }
    ?>
</table>