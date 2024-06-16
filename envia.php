<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);
    
    $para = "gustaDev.3107@outlook.com";

    $assunto = 'Coleta de dados'

    $corpo ="Nome: ".$nome."\n"."E-mail:".$email."\n"."Telefone:".$telefone."\n"."Mensagem:".$mensagem;

    $cabeca = "From: gustavo.silva031@outlook.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversionsion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Mensagem enviada com sucesso!")
    }else{
        echo("Houve um erro ao enviar a mensagem, verifique se \nos campos estão prenchido corretamente.")
    }

?>