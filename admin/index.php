<?php
  session_start();
  if (isset($_SESSION["dadosLogin"])){
    header("Location: admin.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Área Administrativa da Loja Darcy</title>
  </head>
  <body>
  <div class="container">
    <h1>Área Administrativa</h1>
    <form method="post" action="login.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="txtemail" name="txtemail"
             aria-describedby="emailHelp" placeholder="Informe o Email">            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="txtsenha" name="txtsenha"
            placeholder="Informe a Senha">
        </div>
            <div class="botao text-right">
            <button type="submit" class="btn btn-primary">Acessar</button>
        </div>
    </form>
<?php
  include_once("../includes/conexao.php");
  $existe = mysqli_query($conexao,"select * from tb_usuarios limit 1");
  if (mysqli_num_rows($existe)==0){
    $inserir = mysqli_query($conexao,"insert into tb_usuarios VALUES 
    (null,'Administrador','admin@etec.com','123')");    
  }
  echo "Usuario e senha padrão: Email: admin@etec.com Senha: 123 "; 
?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>