<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
date_default_timezone_set('America/Araguaina');
require("class/class.phpmailer.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];


// Inicia a classe PHPMailer
$mail = new PHPMailer();
$mail->CharSet  = "UTF-8"; 
$phpmailer->CharSet  = "UTF-8"; 


$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.rnj.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'contato2@rnj.com.br'; // Usuário do servidor SMTP
$mail->Password = 'pires0021'; // Senha da caixa postal utilizada


 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato2@rnj.com.br"; // Seu e-mail
$mail->Sender = "contato2@rnj.com.br"; // Seu e-mail
$mail->FromName = "Formulário de Orçamento"; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('ricardo@rnj.com.brm');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Formulário da Página Orçamento"; // Assunto da mensagem
$mail->Body = 'Formulário da Página Orçamento
<p><b>Nome:</b> '.$nome.'
<p><b>E-mail:</b> '.$email.'
<p><b>Telefone:</b> '.$telefone.'
<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem</b> '.$msg.'
<hr>';
$mail->AltBody = 'Formulário da Página Orçamento \r\n 
<p><b>Nome:</b> '.$nome.'
<p><b>E-mail:</b> '.$email.'
<p><b>Telefone:</b> '.$telefone.'
<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem</b> '.$msg.'
<hr>';
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado
if ($enviado) {
echo "<script>location.href='obrigado-orcamento.php'</script>"; // Página que será redirecionada
} else {
echo "<script>alert('Erro ao enviar a mensagem'); location.href='criacao_de_sites_sites_gerenciaveis.html';</script>";
echo "Informações do erro: 
" . $mail->ErrorInfo;
}
 
?>