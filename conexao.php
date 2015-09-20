<?php

// Define os valores para as vari�veis de conex�o com o Banco de Dados
#FileName="Connection_php_mysql.htm"
		#Type="MYSQL"
		#HTTP = "true"
		$hostname = ""; // servidor local
		$database = ""; // nome que eu coloquei no BD
		$username = ""; // Login admin
		$password = ""; // senha


//$servidor = 'localhost';
//$usuario = 'root';
//$senha = '';
//$banco = 'banco_modular';

// Realiza a conex�o com o banco de dados. A conex�o fica armazenada em uma vari�vel.
/*
Repare que o Mysqli j� faz a sele��o de um Banco de Dados espec�fico dentro do "Servidor de Banco de Dados (MySQL)" na primeira 
fun��o 'mysqli_connect', ou seja, n�o � feita a conex�o para depois selecionar o Bando de Dados com outra fun��o
A partir desse momento, todas as consultas, inser��es, altera��es e exclus�es realizadas ser�o
feitas SOMENTE no Banco de Dados selecionado
*/
$conn = new mysqli($hostname, $username, $password, $database);
//$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if ( mysqli_connect_error() ) {
    $logMessage = 'MySQL Error: ' . mysqli_connect_error();
	echo  'MySQL Error: ' . mysqli_connect_error();
    // Call your logger here.
    die('Could not connect to the database');
}

							/* 
							
							nas HTML que precisar usar banco de dados, colocar 
								
								<?php
									require 'conexao.php';
								?>  
							*/
?>