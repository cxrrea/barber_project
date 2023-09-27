<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agendamento</title>
</head>

<style>
body {
			font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            background-image: url(../peagap/image/1936431.jpg);
            background-size: cover;
            background-position: center;
        }

		body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7); /* Cor de fundo semi-transparente para desfoque */
            backdrop-filter: blur(02px); /* Desfoque aplicado apenas ao fundo */
            z-index: -1; /* Coloca o elemento ::before atrás do conteúdo */
        }

        .logo img{
            width: 90%;
            display: flex;
            position: relative;
            align-content: space-between;
        
            
        }

       header {
        background-color: #000000ab;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            text-align: right;
            width: 100%;
            padding-right: 100px;
           
        }

        .menu {
            list-style-type: none;
            margin: 0;
            padding: 10px;
            
        }

        .menu li {
            display: inline;
            justify-content: right;
            flex-direction: row;
            margin-right: 20px;
        }

        .menu li:last-child {
            margin-right: 0;
        }

        .menu a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .menu a:hover {
            text-decoration: underline;
        }

		
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Adiciona uma camada semi-transparente para melhor legibilidade do conteúdo */
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            padding: 34px 55px;
            margin-top: 90px;
            width: 80%;
            max-width: 300px;
            text-align: center;
        }
        h1 {
            color: #000000;
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            margin-top: 0px;
        }
        label, input, select {
            display: block;
            margin-bottom: 25px;
            margin-top: 15px;
            width: 100%;
        }
        input[type="text"],
        input[type="date"],
        input[type="time"],
        input[type="tel" ],
        input[type="email"],
        input[type="password"],
        input[type="password"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 16px;
        
        }
        select {
            background-color: #f8f8f8;
        }
        button {
            background-color: #000000;
            color: #ffffff;
            padding: 12px 50px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #252729;
        }


        </style>
<body>

<div class="logo">
<img src="image/image_donnavalhon.svg" alt="">

</div>
<header>
    <nav>
        <ul class="menu">
            <li><a href="#">Início</a></li>
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</header>


<div class="container">
    <h1>CADASTRO</h1>
   <?php
    if(isset($_SESSION['msg']))
    echo $_SESSION['msg'];
        unset($_SESSION['msg']);
   ?>
    <form method="POST" action="formulario.php">
        <label for="nome"></label>
        <input type="text" id="nome" name="nome" required placeholder="Nome Completo">

        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <label for="telefone"></label>
        <input type="tel" id="telefone" name="telefone" required placeholder="Telefone" required>

        <label for="senha"></label>
        <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required>

        <label for="confirm"></label>
        <input type="password" id="confirm" name="confirm" placeholder="Digite uma senha" required>

    
        </select>

        <br>

        <button type="submit">Concluir</button>
    </form>
</div>

</body>
</html>
    
   
