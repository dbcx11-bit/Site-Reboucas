<?php

$destino = "comercial@reboucastelecom.com.br";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$assunto = "Contato pelo site - Rebouças Telecom";

$corpo = "Nome: $nome\n";
$corpo .= "Email: $email\n";
$corpo .= "Telefone: $telefone\n\n";
$corpo .= "Mensagem:\n$mensagem";

$cabecalho = "From: $email" . "\r\n" .
"Reply-To: $email";

mail($destino,$assunto,$corpo,$cabecalho);

echo "<script>
alert('Mensagem enviada com sucesso!');
window.location.href='contato.html';
</script>";

?>