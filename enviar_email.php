<?php   
session_start();
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer/PHPMailerAutoload.php";
include "db.php";
$usuID = $_SESSION["ID"];

$query="select usuarioNome,usuarioEmail from usuario where usuarioID=" . $usuID;
$resultado=mysqli_query($conexao,$query) or die("Erro no banco de dados!");
$rows=mysqli_fetch_assoc($resultado);        
mysqli_close($conexao);                    
$usuEmail = $rows['usuarioEmail'];
$usuNome = $rows['usuarioNome'];

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

// Método de envio 
$mail->IsSMTP(); 

// Enviar por SMTP 
$mail->Host = 'smtp.mailtrap.io';

// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 2525;


// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 

// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = '4a940484540018';
$mail->Password = 'e7540d18e86314';

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 

// Define o remetente 
// Seu e-mail 
$mail->From = " grupo2eduvaleavare@gmail.com"; 

// Seu nome 
$mail->FromName = "Grupo 2"; 

// Define o(s) destinatário(s) 

$mail->AddAddress("$usuEmail", "$usuNome"); 


// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 

$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = "Teste"; 

// Corpo do email 
$mail->Body = "
<h1>Ola esse é um teste $usuNome</h1>
<p></p>
"; 

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

// Envia o e-mail 
$enviado = $mail->Send(); 

// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 


?>