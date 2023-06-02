<form action="cadastros/subcategorias/salvar.php" id="grava" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
      <select class="form-control" id="txtCategoria" name="txtCategoria"> 
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
    <label for="exampleInputEmail1">SubCategoria</label>
    <input type="text" class="form-control" id="txtSubtegoria" name="txtSubCategoria" placeholder="Informe a SubCategoria">
  </div>
  <input type="hidden" value="0" id="alterando" name="alterando">
  <input type="hidden" value="0" id="id_alterar" name="id_alterar">
  <button type="submit" class="btn btn-primary" id="btnSalvar">Gravar SubCategoria</button>
</form>

<div id="Lista"></div>

<script>
    $( document ).ready(function() {
      $("#Lista").load("cadastros/subcategorias/lista.php");
      $("#btnSalvar").click(function(e){
        e.preventDefault();       
        
        $('#grava').ajaxForm({
		         resetForm: true, 			  
             beforeSend:function() { 
                 $('#btnSalvar').html('<i class="fa fa-spinner fa-spin"></i> Salvando...');
                 $('#btnSalvar').attr('disabled', true);	
		             $('#grava').find('input').prop('disabled', true);
              },
	          	success: function( retorno ){		
                  $("#Lista").load("cadastros/subcategorias/lista.php");	
                  $("#alterando").val(0);	
				        	alert(retorno);
			      	},		 
          complete:function(retorno) {		
            $('#btnSalvar').html('<i class="fa fa-save"></i> Salvar Alterações');
            $('#btnSalvar').attr('disabled', false);
            $('#grava').find('input, button').prop('disabled', false);             
          },
		 error: function (retorno) {	
                 alert(retorno);
            }
	}).submit(); //Dispara o Formulário
      }) //Finaliza o click do botão     
});
</script>