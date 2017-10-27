<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
date_default_timezone_set('America/Araguaina');

require_once("class/class.phpmailer.php");

$t_nome = $_POST['t_nome'];
$t_email = $_POST['t_email'];
$t_telefone = $_POST['t_telefone'];
$t_msg = $_POST['t_msg'];

// Inicia a classe PHPMailer
$mail = new PHPMailer(true);

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP

try {
    $mail->Host = 'smtp.rnj.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Port = 587; //  Usar 587 porta SMTP
    $mail->Username = 'contato2@rnj.com.br'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'pires0021'; // Senha do servidor SMTP (senha do email usado)

    //Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->SetFrom('contato2@rnj.com.br', 'Nome'); //Seu e-mail
    $mail->AddReplyTo('contato2@rnj.com.br', 'Nome'); //Seu e-mail
    $mail->Subject = 'Assunto';//Assunto do e-mail


    //Define os destinatário(s)
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress('fpwebdigital@gmail.com', 'Teste Locaweb');


    //Campos abaixo são opcionais
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
    //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
    //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo


    //Define o corpo do email
    $mail->MsgHTML('corpo do email');


// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->Subject = "Formulário da Página Criação de Sites"; // Assunto da mensagem
    $mail->Body = 'Formulário enviado da págna de Contato
<p><b>Nome:</b> ' . $t_nome . '
<p><b>E-mail:</b> ' . $t_email . '
<p><b>Telefone:</b> ' . $t_telefone . '
<p><b>Mensagem</b> ' . $t_msg . '
<hr>';


    ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
    //$mail->MsgHTML(file_get_contents('arquivo.html'));

    $mail->Send();
    echo "Mensagem enviada com sucesso</p>\n";

    //caso apresente algum erro é apresentado abaixo com essa exceção.
}catch (phpmailerException $e) {
    echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
?>




