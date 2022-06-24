<?php
	$DSN = 'mysql:host=localhost;dbname=php_com_pdo'; //data source name -> tipo do banco , ip  e nome do banco
	$USER = 'root';
	$PASSWORD = '';
	try {
		$conexao = new PDO($DSN , $USER, $PASSWORD);
		$query = '
			create table if not exists tb_usuarios(
					id int not null primary key auto_increment, 
					nome varchar(50) not null,
					email varchar(100) not null,
					senha varchar(32) not null
				)

		';
		$retorno = $conexao->exec($query);// , quantidade de linhas afetadas no processo
		//echo $retorno."<br>"; //0
		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Benn Arthur de Souza" , bennarthurdesouza@gmail.com , "Deusebom1"
			)
		';
		$retorno = $conexao->exec($query);
		echo $retorno;

	} catch(PDOexcpetion $e) {
		echo 'Erro: '.$e->getCode().'Mensagem '.$e->getMessage();
		//registrar erro
	}
	
?>