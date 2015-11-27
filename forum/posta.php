<?php
      $page = $_POST['page'];
      $texto = $_POST['texto'];
	  $name = $_POST['name'];
      $file = "{$page}.html";
      $bd = fopen($file, "a+") ;
      $cnte = "<hr> {$name}:<blockquote>{$texto}</blockquote> <br>";
      fwrite($bd, $cnte);
      fclose($bd);
      header("location: {$page}.html");
?>
