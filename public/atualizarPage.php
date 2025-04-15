<?php
    // sessao usuario 
    session_start();
      
    if (!isset($_SESSION['usuario'])) {
        header('Location: /login');
    } 
  ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Balance - Atualizar Dados</title>
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>

  <body style="background-color:<?= $_SESSION['temaUser'] == false ? '#e8eaf6' : '#303131';?>">

  <?php 
    include('conexao.php');
    include('../app/model/classSelect.php'); 
    #Update no banco de dados 
    include('../app/core/updateController.php'); 

  ?>
	<!-- Header -->
  <?php include('../app/views/header.php'); ?>
 	 <!-- Header -->

 	<!-- Formulario Atualzar dados -->
  <?php include('../app/views/atualizar.php'); ?>
 	 <!-- Formulario Atualzar dados-->

   <!-- modal da aplicação-->
    <?php include('../app/views/modal.php'); ?>
    <!-- modal da aplicação-->

	<!-- footer -->
  <?php include('../app/views/footer.php'); ?>
  <!-- footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
  <?php include("./assets/modal.php"); ?>
    <?php include("./assets/btnVoltar.php"); ?>
</body>

</html>


	