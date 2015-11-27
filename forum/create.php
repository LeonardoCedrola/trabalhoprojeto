<!DOCTYPE html>
<html>
	<head>
		<title>Forum</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="shortcut icon" type="image/x-icon" href="http://cidadaovirtual.files.wordpress.com/2011/04/icon_globo.png">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="gallery.prefixed.css">
		<link rel="stylesheet" href="gallery.theme.css">
		<style type="text/css">
		#page-footer, div.navbar, div.navbar ul.linklist {display: block !important;}ul.linklist li.rightside, ul.linklist li.rightside a.copyright {display: inline !important;}
		</style>

		<script type="text/javascript">
			<!-- JavaScript que validará os campos obrigatórios! -->
			function validaCampo()
			{
			if(document.forum.nombre.value=="")
			{
			alert("Insira seu nome");
			return false;
			}
			else
			if(document.forum.nome.value=="")
			{
			alert("Insira o título do tópico");
			return false;
			}
			else
			if(document.forum.cont.value=="")
			{
			alert("Insira o tópico");
			return false;
			}
			return true;
			}
			<!-- Fim do JavaScript que validará os campos obrigatórios! -->
		</script>

	</head>
	<body id="phpbb">
		<ul id="menu">
			<li><a href="../index.htm">Home</a></li>
			<li><a href="../livros.htm">Livros</a></li>
			<li><a href="../forum/forum.php">Fórum</a></li>
			<li><a href="../download.htm">Download</a></li>
			<li><a href="../restrito.htm">Login</a></li>
			<li><a href="../enviaEmail.php">Contato</a></li>
		</ul>
		<div class="conteneur_minwidth_IE">
		<div class="conteneur_layout_IE">
		<div class="conteneur_container_IE">
		<div id="wrap"><a id="top" name="top" accesskey="t">
		</a>
		<div id="page-header">
		<div class="navbar">
		<div class="inner">
		<span class="corners-top">
			<span>
			</span>
		</span>
		<ul class="linklist navlinks">
			<li>
				<a class="mainmenu" href="forum.php" rel="nofollow">
				Home
				</a>
				&nbsp;|
				&nbsp;
			</li>
			<li>
				<a class="mainmenu" href="topicos.php" rel="nofollow">
				Tópicos
				</a>
				&nbsp;|
				&nbsp;
			</li>
			<li>
				<a class="mainmenu" href="resp.php" rel="nofollow">
				Responder um tópico
				</a>
				&nbsp;|
				&nbsp;
			</li>
			<li>
			<a class="mainmenu" href="create.php" rel="nofollow">
				Criar um novo tópico
			</a> 
			&nbsp;
		</ul>
		<div id="search-box" align="right">
			<br>
		</div>
		<span class="corners-bottom">
			<span>
			</span>
		</span>
		</div>
		</div>
		</div>
		<div id="page-body">
		<div id="emptyidcc" class="no-left">
		<div id="outer-wrapper">
		<div id="wrapper">
		<div id="container">
		<div id="content">
		<div id="emptyidleft">
		</div>
		<div id="main">
		<div id="main-content">
		&nbsp;<?php
		date_default_timezone_set('America/Sao_Paulo');
		 echo date('D, F j, Y, h:i:s A');
		?><br>
		<br class="clear" />
		<div class="forabg">
		<div class="inner">
			<span class="corners-top">
				<span>
				</span>
			</span>

			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dd class="dterm">
							<div class="table-title">
								Tópicos
							</div>
						</dd>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
				<li class="row">
				<li>
					<dl>
					<font face="Verdana" size="3">
			<div style='margin-top:4px; margin-bottom:5px; margin-left:10px; '>
						<font size="6"><b>Criar novo tópico:</b></font><br>
						<font size="1">Não utilize espaços ou caracteres especiais no título do tópico</font> <br><br>
						<form action="novo.php" method="post" name="forum" id="forum" class="forum" onsubmit="return validaCampo(); return false;">
							Seu nome:<br><input placeholder="Nome" type="text" name="nombre" id="nombre" class="nombre"><br>
							<label for="nome">Título:</label> <br><input placeholder="Título do tópico" type="text" name="nome" id="nome" class="nome"><br>
							Conteúdo:<br> <textarea name="cont" rows="7" cols="60" id="cont" class="cont"></textarea><br>
							<input type="submit" value="Criar">
						</form>
					</font>
					</dl>
				</li>
			</ul>
			<span class="corners-bottom">
			</span>
			</div>
		</div>
	</body>
</html>