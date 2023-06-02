<form action="cadastros/categorias/salvar.php" id="grava" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <input type="text" class="form-control" id="txtCategoria" name="txtCategoria" placeholder="Informe a Categoria">
  </div>
  <input type="hidden" value="0" id="alterando" name="alterando">
  <input type="hidden" value="0" id="id_alterar" name="id_alterar">
  <button id="btnSalvar" type="submit" class="btn btn-primary">Gravar Categoria</button>
</form>

<div id="Lista"></div>

<script>
    $( document ).ready(function() {

      $("#Lista").load("cadastros/categorias/lista.php");

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
                  $("#Lista").load("cadastros/categorias/lista.php");	
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