<?php
		$nombre = $_POST['nombre'];
        $nome = $_POST['nome'];
        $cont = $_POST['cont'];
        $file = "bd.txt";
        $bd = fopen($file, "a+");
        $cbd = "<a href={$nome}.html>{$nome}</a><br>";
        fwrite($bd, $cbd);
        fclose($bd);
        $pnome = "{$nome}.html";
        $pagina = fopen( $pnome, "w");
        $pcon = "<html>
<head>
<title>{$nome}</title>
<link rel='stylesheet' href='style.css' type='text/css' />
		<link rel='shortcut icon' type='image/x-icon' href='http://cidadaovirtual.files.wordpress.com/2011/04/icon_globo.png'>
		<link rel='stylesheet' type='text/css' href='estilo.css'>
		<link rel='stylesheet' href='normalize.css'>
		<link rel='stylesheet' href='gallery.prefixed.css'>
		<link rel='stylesheet' href='gallery.theme.css'>
<style type='text/css'>z
#page-footer, div.navbar, div.navbar ul.linklist {display: block !important;}ul.linklist li.rightside, ul.linklist li.rightside a.copyright {display: inline !important;}
</style>

<script type='text/javascript'>
function validaCampo()
{
if(document.resp.name.value=='')
{
alert('Insira seu nome');
return false;
}
else
if(document.resp.texto.value=='')
{
alert('Insira sua resposta');
return false;
}
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script>

</head>
<body id='phpbb'>
<ul id='menu'>
			<li><a href='../index.htm'>Home</a></li>
			<li><a href='./livros.htm'>Livros</a></li>
			<li><a href='./forum/forum.php'>Fórum</a></li>
			<li><a href='../download.htm'>Download</a></li>
			<li><a href='../restrito.htm'>Login</a></li>
			<li><a href='../enviaEmail.php'>Contato</a></li>
		</ul>
<div class='conteneur_minwidth_IE'>
<div class='conteneur_layout_IE'>
<div class='conteneur_container_IE'>
<div id='wrap'><a id='top' name='top' accesskey='t'>
</a>
<div id='page-header'>
<div class='navbar'>
<div class='inner'>
<span class='corners-top'>
<span>
</span>
</span>
<ul class='linklist navlinks'>
<li>
<a class='mainmenu' href='forum.php' rel='nofollow'>
Home
</a>
&nbsp;|
&nbsp;
</li>
<li>
<a class='mainmenu' href='topicos.php' rel='nofollow'>
Tópicos
</a>
&nbsp;|
&nbsp;
</li>
<li>
<a class='mainmenu' href='resp.php' rel='nofollow'>
Responder um tópico
</a>
&nbsp;|
&nbsp;
</li>
<li>
<a class='mainmenu' href='create.php' rel='nofollow'>
Criar um novo tópico
</a> 
&nbsp;
</ul>
<br>
<form action='http://www.google.com/search' method='get' target='_blank'>
<input placeholder='Busca' name='q' value='' type='text'>
<input name='domains' value='forum.php' type='hidden'>
<input name='sitesearch' value='forum.php' type='hidden'>
<input type='submit' value='Buscar'>
</form>
</div>
<span class='corners-bottom'>
<span>
</span>
</span>
</div>
</div>
</div>
<div id='page-body'>
<div id='emptyidcc' class='no-left'>
<div id='outer-wrapper'>
<div id='wrapper'>
<div id='container'>
<div id='content'>
<div id='emptyidleft'>
</div>
<div id='main'>
<div id='main-content'>
&nbsp;<?php
date_default_timezone_set('America/Sao_Paulo');
 echo date('D, F j, Y, h:i:s A');
?><br>
<br class='clear' />
<div class='forabg'>
<div class='inner'>
<span class='corners-top'>
<span>
</span>
</span>

<ul class='topiclist'>
<li class='header'>
<dl class='icon'>
<dd class='dterm'>
<div class='table-title'>
Tópicos
</div>
</dd>
</dl>
</li>
</ul>
<ul class='topiclist forums'>
<li class='row'>
<li>
<dl><div style='margin-top:4px; margin-bottom:5px; margin-left:10px; '>

        <font face=Verdana>
        <form action='posta.php' method='post' id='resp' name='resp' class='resp' onsubmit='return validaCampo(); return false;'>
        <input type='hidden' name='page' value={$nome}>
		<h2 style='font-family: arial;'>Responder</h2>
		<font face='Verdana' size='2'><label for='name'>Nome:</label><br><input placeholder='Nome' type='text' name='name' id='name' class='name'><br>
        <textarea placeholder='Resposta' name='texto' id='texto' class='texto' rows='5' cols='50'></textarea><br><input type='submit' value='Postar'>
        </form><hr>
        <font size='4'>{$nome}
        <br><font size='2'>{$cont}
		<br><blockquote><dl class='codebox'>Tópico iniciado por <b>{$nombre}</b></dl></blockquote>
		</div>
        <hr>";

        fwrite($pagina, $pcon);
        fclose($pagina);
        $ins = "{$nome}.php";
        $pins = fopen("{$nome}.php", "w");
        $novo = $_POST['new'];

        $nfil = "{$nome}.html";
        $nbd = fopen($nfil, 'a+');
        $nmsg = "<div style='margin-top:4px; margin-bottom:5px; margin-left:10px; '><br><br><br><br><br><b>Respostas:</b> {$novo}</div>"; 
        fwrite($nbd, $nmsg);
        fclose($nbd);
        header("location: {$nome}.html");
?>