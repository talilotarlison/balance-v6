<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Balance</title>
    <meta charset="utf-8">
  </head>
  <body>
   <?php
		// Sessão de usuário
   		session_start();

		if (!isset($_SESSION['usuario'])) {
			header('Location: /login');
		} 
		
		// Importar arquivos
		// Conexão com o banco de dados

		include('conexao.php');
		include('../app/model/classDados.php'); 
		include('../app/model/getHoras.php');
		include('../app/model/precoNegativo.php');
		include('../app/core/validateDados.php'); 

		# Insert no banco de dados
		$dados = [
			'id' => null,
			'tipo' => $_POST['tipo'],
			'nome' => $_POST['nome'],
			'preco' => $_POST['preco'],
			'descricao' => $_POST['desc'],
			'data' => Horas::getHoraData()
		];

		#Verifica se os dados estão preenchidos

		if (isset($dados['tipo'], $dados['nome'], $dados['preco'], $dados['descricao'])) {
			$dadosValidados = validateData($dados, $conexao);
			if ($dados['tipo'] == 'Saida') {
				$dadosValidados['preco'] = Preco::retornaNegativo($dadosValidados['preco']);
			} else {
				$dadosValidados['preco'] = abs($dadosValidados['preco']);
			}

			$meusDados = new Insert(
				null,
				$dadosValidados['tipo'],
				$dadosValidados['nome'],
				$dadosValidados['preco'],
				$dadosValidados['descricao'],
				$dados['data']
			);

			$query = $meusDados->inserirDados();
			$resultado = mysqli_query($conexao, $query);

			$_SESSION['mensagem'] = "Adicionado com sucesso!";
		} else {
			$_SESSION['mensagem'] = "Erro ao adicionar!";
		}
		
		header('Location: /home');
?>
  </body>
  
</html>