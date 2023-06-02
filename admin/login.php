<?php
   session_start();
   $email = $_POST["txtemail"];
   $senha = $_POST["txtsenha"];

   include_once "../includes/conexao.php";

  
   $consulta = mysqli_query($conexao,"select * from tb_usuarios 
                  where EMAIL = '$email' and SENHA = '$senha'");

    if (mysqli_num_rows($consulta) > 0){
       $_SESSION["dadosLogin"] = mysqli_fetch_assoc($consulta);
       header("Location: admin.php");
    }else{
        echo "<h1>Usuário e/ou senha inválidos</h1>";
        echo '<a href="index.php">Voltar para a página de login</a>';
    }
?>