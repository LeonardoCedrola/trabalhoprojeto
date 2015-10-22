<?php
date_default_timezone_set("America/Sao_Paulo");
$hoje = date("d-m-Y H:i:s");


if(isset($_POST["enviarEmail"])){
$nome      = $_POST["nome"];
$email     = $_POST["email"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];


if($nome == ""){
echo '<div class="alert alert-warning" role="alert">Nome Em branco</div>';
} else if($email == ""){
echo '<div class="alert alert-warning" role="alert">E-mail em branco</div>';
} else if($assunto == ""){
echo '<div class="alert alert-warning" role="alert">Assunto em branco</div>';
} else if($mensagem == ""){
echo '<div class="alert alert-warning" role="alert">Mensagem em branco</div>';
} else {

    $to      = 'eliassvicini@hotmail.com';
    $subject = 'Há um novo contato';
    $message = '
		
    	
    	<p>Olá</p>
    	<p>Voce recebeu um novo contato. Veja abaixo, os dados deste contato.</p>

    	<p>
		    Nome :'.$nome.'<br />
		    Email :'.$email.'<br />
		    Assunto :'.$assunto.'<br /><br />
		    Mensagem :'.$mensagem.'<br />
    	</p>  

	    Atenciosamente!<br />
	    Enviado em '.$hoje.'
    </div>
    </body>
    <html>';

    $headers = 'From: contato@leomottarocha.com.br' . "\r\n" .
        'Reply-To: eliassvicini@hotmail' . "\r\n" .
        'MIME-Version: 1.1' . "\r\n".
        'Content-type:text/html;charset=UTF-8' . "\r\n".
        'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
        echo '<div class="alert alert-sucess" role="alert">Email enviado</div>';;


}




}
?>