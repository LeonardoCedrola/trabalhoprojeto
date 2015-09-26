<?php

// Define os valores para as variсveis de conexуo com o Banco de Dados
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

// Realiza a conexуo com o banco de dados. A conexуo fica armazenada em uma variсvel.
/*
Repare que o Mysqli jс faz a seleчуo de um Banco de Dados especэfico dentro do "Servidor de Banco de Dados (MySQL)" na primeira 
funчуo 'mysqli_connect', ou seja, nуo щ feita a conexуo para depois selecionar o Bando de Dados com outra funчуo
A partir desse momento, todas as consultas, inserчѕes, alteraчѕes e exclusѕes realizadas serуo
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