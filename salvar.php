<?php
	// Cria as variáveis com os posts enviados
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = preg_replace("/[^0-9]/", "", $_POST['telefone']);
	$mensagem = $_POST['mensagem'];
	// Valida se existe algum campo vazio
	// Se ouver, retorna a mensagem de erro
	if(empty($nome)):
		echo 'Digite seu nome para continuar.';
	elseif(empty($email)):
		echo 'Digite seu e-mail para continuar';
	elseif(empty($telefone)):
		echo 'Digite seu telefone para continuar';
	elseif(empty($mensagem)):
		echo 'Digite sua mensagem para continuar';
	else:
		// Dados de conexão com o servidor
		$servidor = 'mariadb'; // Geralmente o valor é localhost, mas pode ser um domínio, IP, nome do servidor na rede entre outros, entre em contato com seu servidor para saber esse dado.
		$usuario = 'root'; // Usuário do banco
		$senha = '123456'; // Senha do usuário
		$banco = 'artigo'; // Nome do banco de dados
		// Faz a conexão com o Banco de dados
		$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
		// Verifica se ocorreu algum erro
		if (mysqli_connect_errno()):
			trigger_error(mysqli_connect_error());
		endif;
		// Envia os dados pelo método query
		$salvar = $mysqli->query("INSERT INTO `mensagem` (`nome`, `email`, `telefone`, `mensagem`) VALUES ('{$nome}', '{$email}', '{$telefone}', '{$mensagem}')");
		// Valida se as informações foram enviadas com sucesso
		if($salvar):
			echo true;
		else:
			echo 'Erro ao salvar sua mensagem';
		endif;
	endif;