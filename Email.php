<?php
   //Inclui os arquivos phpmailer necessários
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
    require 'src/Exception.php';
    //Defini os espaços do nome dos arquivos
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //Criar instância do phpmailer
    $mail = new PHPMailer();
    //Para usar smtp
    $mail->isSMTP();
    //Definir host smtp
    $mail->Host = "smtp.gmail.com";
    //Ativar autenticação smtp
    $mail->SMTPAuth = "true";
    //Defini o tipo de criptografia (ssl/tls)
    $mail->SMTPSecure = "tls";
    //Defini porta para conectar smtp
    $mail->Port = "587";
    //Defini o nome de usuário do gmail
    $mail->Username = "seu email";
    //Defini o nome de usuário do gmail
    $mail->Password = "senha ou token";
    //Defini assunto do e-mail
    $mail->Subject = "teste de email via gmail ";
    //Definir o e-mail do remetente
    $mail->setFrom("seu email");
    //corpo do e-mail
    $mail->Body = "Chegou o email teste da <strong>olá!</strong>";
    // $mail->AltBody = "Chegou o email teste";
    //Destinatário
    $mail->addAddress("seu email");
    //Enviar e-mail
    if ($mail->send()) {
                echo "E-mail enviado com sucesso";
            } else{
                echo "E-mail nao enviado";
            }
    //Fechando conexão smtp
    $mail->smtpClose();
    
?>