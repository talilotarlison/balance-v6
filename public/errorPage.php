
<?php 
    # sessao do usuario
    session_start();
    
    if (!isset($_SESSION['usuario'])) {
        header('Location: /login');
    } 


    #Conexão com o banco de dados
    include_once('conexao.php');
    include('../app/model/classSelect.php'); 
    // pega class select do banco
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Balance - Error</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/error.css">

</head>

<body style="background-color:<?= $_SESSION['temaUser'] == false ? '#e8eaf6' : '#303131';?>">
     <!-- Header da aplicação-->
    <?php include('../app/views/header.php'); ?>
     <!-- Header da aplicação-->
        <!-- modal da aplicação-->
        <?php include('../app/views/modal.php'); ?>
        <!-- modal da aplicação-->
    <!-- Main da aplicação-->
     <main>
        <h1>Ocorreu um erro, pagina não encontrada.</h1>
        <p>Desculpe, algo deu errado. Por favor, tente novamente mais tarde.</p>
        <a href="/" class="error">Voltar para a página inicial</a>
    </main>
      <!-- Modal Add Trigger nova entrada tbn-->
  <a href="#modal-add" class="btn-floating  btn-large waves-effect waves-light blue  modal-trigger waves-effect "><i class="material-icons">add</i></a>
 <!-- Modal Add Trigger nova entrada btn-->
 
        <!--Table com os dados-->
    <?php include('../app/views/footer.php'); ?>
    <!--Table com os dados-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <?php include("./assets/modal.php"); ?>
    <?php include("./assets/btnVoltar.php"); ?>
    
</body>
</html>