<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $to = "curso.irs@hotmail.com";
  $assunto = "Mensagem do Site";
  $conteudo= "Nome: $nome\nEmail: $email\nMensagem: $mensagem\n\n";
  mail($to,$assunto,$conteudo);
  header("Location: http://professionalcleaners.com.br/teste");
?>
