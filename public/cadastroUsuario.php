<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Balance</title>
    <meta charset="utf-8">
  </head>
  <body>
   <?php 
      session_start();
      include('conexao.php');

      include('../app/model/getHoras.php');

      include('../app/core/validateDados.php'); 
      
      include('../app/model/classUser.php'); 

      #Inserir dados na tabela de usuario
      $dadosUsuario = [
          'id' => null,
          'nome' => $_POST['nome'],
          'email' => $_POST['email'],
          'senha' => $_POST['senha'],
          'senhaConfirme' => $_POST['senhaConfirme'],
          'data' => Horas::getHoraData()
      ];

        # Validar senhas iguais
        if (isset($dadosUsuario['nome'], $dadosUsuario['email'], $dadosUsuario['senha'], $dadosUsuario['senhaConfirme'])) {
            if ($dadosUsuario['senha'] === $dadosUsuario['senhaConfirme']) {
                unset($_SESSION['senhaInvalida']);
                # valido senhas iguais
                $senhavalidada = validarSenha($dadosUsuario['senha'], $dadosUsuario['senhaConfirme']);
                $user = validateUser($dadosUsuario, $conexao);
                $novoUsuario = new InsertUser(
                    $user['id'], 
                    $user['nome'], 
                    $user['email'], 
                    $user['senha'], 
                    $dadosUsuario['data']
                );
                # Verifica se o email já existe no banco de dados
                $query = $novoUsuario->inserirDadosUser();
                $resultado = mysqli_query($conexao, $query);
                $_SESSION['cadastro'] = "Cadastro realizado com Sucesso!";
                header('Location: /cadastro');
            } else {
                $_SESSION['senhaInvalida'] = "Senhas diferentes, tente novamente!";
                header('Location: /cadastro');
            }
        }

        function validarSenha($senha, $senhaConfirme) {
            if ($senha == $senhaConfirme) {
              return $senha;
            }
        }

        #header('Location: index.php');
        exit;
    ?>
  </body>
  
</html>