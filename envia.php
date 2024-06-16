<?php

// Coleta e sanitização dos dados do formulário
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['telefone']);
$mensagem = htmlspecialchars($_POST['mensagem']);

// Configuração do destinatário e assunto do e-mail
$para = "gustaDev.3107@outlook.com";
$assunto = 'Coleta de dados';

// Corpo do e-mail
$corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Telefone: " . $telefone . "\n" . "Mensagem: " . $mensagem;

// Cabeçalhos do e-mail
$cabeca = "From: soaregustavo8401@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer: PHP/" . phpversion();

// Envio do e-mail
if(mail($para, $assunto, $corpo, $cabeca)){
    echo("Mensagem enviada com sucesso!");
} else {
    echo("Houve um erro ao enviar a mensagem, verifique se \nos campos estão preenchidos corretamente.");
}

?>