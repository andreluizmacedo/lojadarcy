<?php
    session_start();
    if (!isset($_SESSION["dadosLogin"])){
      header("Location: index.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Área Administrativa da Loja Darcy</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Loja Darcy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?pg=Usuarios"><i class="fa-solid fa-user" alt="Usuários" title="Usuários"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pg=Categorias"><i class="fa-solid fa-list-ul"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pg=SubCategorias"><i class="fa-solid fa-list-ol"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pg=Produtos"><i class="fa-solid fa-box-open"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pg=Pedidos"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sair.php"><i class="fa-solid fa-person-walking-arrow-right"></i></a>
            </li>
            </ul>            
        </div>
   </div>
</nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
<div class="container">
<?php
  include_once("../includes/conexao.php");
  if (isset($_GET["pg"])){
     switch ($_GET["pg"]){
        case "Usuarios"      : $pg = "cadastros/usuarios/index.php";break;
        case "Categorias"    : $pg = "cadastros/categorias/index.php";break;
        case "SubCategorias" : $pg = "cadastros/subcategorias/index.php";break;
        case "Produtos"      : $pg = "cadastros/produtos/index.php";break;
     } 
     include($pg);
  }else{
    echo "<h1>Selecione um item no Menu para começar!</h1>";
  }
?>
</div>


  </body>
</html>