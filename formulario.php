<?php 
session_start();
    
include_once("conexao.php");

      $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING) ;
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
      $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

      $result_usuario = "INSERT INTO dn_clientes (Nome_Completo, Email, Telefone, Senha) VALUES('$nome', '$email', '$telefone', '$senha')";

     $resultado_usuario = mysqli_query($conn, $result_usuario);

     if(mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
        header("Location: index.php");
     } else {
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado!</p>";
        header("Location: index.php");
     }
     
    
