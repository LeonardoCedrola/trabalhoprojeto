<?php include "scripts/enviar-email.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Email</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	
<div class="centralizaEmail">
	
<form class="frmEmail" action="#" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome <span class="requerido">*</span></label>
    <input type="text" class="form-control"  placeholder="Nome" required name="nome" value="<?php echo $nome; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email  <span class="requerido">*</span></label>
    <input type="email" class="form-control"  placeholder="Email" required name="email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Assunto  <span class="requerido">* </span></label>
    <input type="text" class="form-control" placeholder="Assunto" required name="assunto" value="<?php echo $assunto; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mensagem  <span class="requerido">* </span></label>
    <textarea class="form-control textArea"  required name="mensagem" value="<?php echo $mensagem; ?>"></textarea>   
  </div>

<div class="form-group">
  <span class="requerido">* Requerido</span>
</div>

  <input type="submit" name="enviarEmail" value="Enviar Email" class="btn btn-primary enviarEmail">
  </form>

</div>

</body>
</html>