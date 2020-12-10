<?php 

if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['mensagem'])) {
    header("Location: ".url("web/error/form"));
    exit;
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mensagem_final  = "nome: $nome\n";
$mensagem_final .= "email: $email\n";
$mensagem_final .= "mensagem: $mensagem\n";

$email_remetente = "contato@vbcarreiras.com.br";

$headers  = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: $email_remetente\n"; // remetente
$headers .= "Return-Path: $email_remetente\n"; // return-path

$envio = mail($email_remetente, "$nome enviou uma mensagem pelo site!", $mensagem_final, $headers, "-f$email_remetente");

header("Location: ".url("web/message/success"));