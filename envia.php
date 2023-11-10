<?php

$nome = addcslashes($_POST[`nome`]);
$email = addcslashes($_POST[`email`]);
$celular = addcslashes($_POST[`celular`])

$para = "kauan.ferreiralemos12@gmail.com";
$assunto = "Coleta de dados - portfólio";

$corpo = "nome: ".$nome."\n"."E-mail:".$email."\n"."celular:".$celular;

$cabeca = "From: kauan.ferreiralemos12@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email")
}
?>