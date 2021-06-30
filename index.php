<?php 

	$dsn = 'mysql:host=localhost;dbname=php_pdo';
	$usuario = 'root';
	$senha = '';



	//$connect = new PDO('mysql:host=localhost;dbname=PHP-Pdo-db','root','')//DSN(Data Source Name).//host//nome do banco de dados//usuário//senha//verificar se a extensão do mysql está descomentada(php.ini).
	try{
		$conexao = new PDO($dsn,$usuario,$senha);

		$query = '
			create table tb_usuarios(
			   id int not null primary key auto_increment,
			   nome varchar(50) not null,
			   email varchar(100) not null,
			   password varchar(32) not null


			)

		';

		$retorno = $conexao-> exec($query);

		echo $retorno;

		$query = '
			insert into tb_usuarios(
				nome,email,password

			)values(
				"uriel","random-test@gmail.com","1234567"

			)

		';
		$retorno = $conexao->exec($query);

		echo $retorno;


	}catch(PDOException $e){
		echo 'erro: '.$e->getCode().' Mensagem:' .$e->getMessage();
		

	}//registrar erro.

	