<?php
    $to = "fernandoaslima70@gmail.com"; //destinatario do email

    $assunto = "Formulário do site";

    $mensagem = $_POST['mensagem']." - ".$_POST['nome'];

    $email = $_POST['email']; //remetente do email

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Additional headers
    $headers[] = 'To: $to';
    $headers[] = 'From: $email';
   // $headers[] = 'Cc: birthdayarchive@example.com';
   // $headers[] = 'Bcc: birthdaycheck@example.com';



    $status = mail($to, $assunto, $mensagem, implode("\r\n", $headers));

    If($status==true){
        print "Mensagem enviada com sucesso!";}

    else{
        print "Não foi possivel enviar, tente novamente.";
    }


?>