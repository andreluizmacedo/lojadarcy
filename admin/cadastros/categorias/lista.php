<table class="table">
    <tr>
        <th>Categoria</th>
        <th>Alterar/Apagar</th>
    </tr>
    <?php
      include_once("../../../includes/conexao.php");
      $listar = mysqli_query($conexao,"select * from
       tb_categorias order by DESCRICAO");
      
      while ($linha = mysqli_fetch_assoc($listar)){
        echo '<tr>';
        echo '<td><input type="hidden" id="id_categoria" value="'.$linha["ID"].'">'.$linha["DESCRICAO"].'</td>';
        echo '<td><i class="fa-solid fa-pen-to-square btnAlterar"></i> / <i class="fa-regular fa-trash-can btnExcluir"></i></td>';
        echo '</tr>';
      }
    ?>
</table>

<script>
    $( document ).ready(function() {

      $(".btnExcluir").click(function(){
         var codigo = $(this).parent().parent().find("#id_categoria").val();
      
        if (confirm("Deseja realmente remover está categoria") == true) {
          //Aqui vamos programar o que será feito se realmente quiser excluir
            $.post("cadastros/categorias/excluir.php",{id:codigo},
            function(retorno){
              $("#Lista").load("cadastros/categorias/lista.php");
              alert("Categoria Removida com sucesso!");  
          })          
        }
      })  
      
      $(".btnAlterar").click(function(){
        var codigo = $(this).parent().parent().find("#id_categoria").val();
        var categoria = $(this).parent().parent().find("td:eq(0)").text();
        $("#alterando").val(1);	
        $("#id_alterar").val(codigo);	
        $("#txtCategoria").val(categoria);
      })




   });
</script>