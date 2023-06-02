
<form method="POST" action="cadastros/produtos/salvar.php" id="grava">

 <!-- SubCategoias dos produtos (não alterado para sub) -->
    <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
        <select class="form-control" id="txtCategoria" name="prod"> 
          <option value="0" selected>Escolha uma Categoria</option>   
          <?php
            $cat = mysqli_query($conexao, "select * from tb_categorias");
            while ($categoria = mysqli_fetch_assoc($cat)){
              echo '<option value="'.$categoria["ID"].'">'.$categoria["DESCRICAO"].'</option>';
            }
          ?>    
        </select>
      </div>

<div class="form-group">
  <label for="exampleInputEmail1">Título</label>
  <input type="text" class="form-control" id="titulo" name="titulo"  placeholder="Informe o título">
</div>

<div class="form-group">
  <label for="exampleInputPassword1">Descrição</label>
  <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição"></textarea>
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Preço</label>
  <input type="number" class="form-control" id="preco" name="preco"  placeholder="Preço">
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Estoque</label>
  <input type="text" class="form-control" id="estoque" name="estoque"  placeholder="Estoque">
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Foto</label> </br>
  <input type="file" class="btn btn-primary"></input>
  <button id="btnSalvar" type="submit" class="btn btn-primary">Salvar</button>
</div>
</form>

<script>
    $ ( document ).ready(function() {

      $("#btnSalvar").click(function(e){
        e.preventDefault();

      $('#grava').ajaxForm({
        resetForm: true,
        beforeSend: function() {
            $('#btnSalvar').html('<i class="fa fa-spinner fa-spin"></i> Salvando...');
            $('#btnSalvar').attr('disabled', true);
            $('#grava').find('input').prop('disabled', true);
        },
        success: function( retorno ) {
           alert(retorno);
        },
        complete: function(retorno)  {
            $('#btnSalvar').html('Salvar');
            $('#btnSalvar').attr('disabled', false);
            $('#grava').find('input, button').prop('disabled', false);
          },
          error: function (retorno) {
             alert(retorno);
          }
      }).submit(); 
})
    });
</script>
<style>
  #btnSalvar{
    margin-left: 650px;
  }
</style>