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
		&nbsp;
		<?php
		date_default_timezone_set('America/Sao_Paulo');
		 echo date('D, F j, Y, h:i:s A');
		?>
		<br>
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
								Todos os tópicos
							</div>
						</dd>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
				<li class="row">
				<li>
					<dl>
						<div style='margin-top:4px; margin-bottom:5px; margin-left:10px; '>
							<?php include('bd.txt'); ?>
						</dl>
				</li>
			</ul>
			<span class="corners-bottom">
			</span>
			</div>
		</div>
	</body>
</html>