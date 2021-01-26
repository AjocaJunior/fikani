<?php

$to = "assisjunior33@gmail.com";
$subject = "Utilizador do educa.co.mz";

$nome = $_POST['name'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$contacto = $_POST['contact'];
$message = $_POST['message'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";

mail($to,$subject,$message, $headers);

echo "Email Enviado com Sucesso";

// if(isset($_POST['email']) && $_POST['message'] != ''){

//         if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    
//             $nome = $_POST['name'];
//             // $apelido = $_POST['apelido'];
//             $email = $_POST['email'];
//             $contacto = $_POST['contact'];
//             $message = $_POST['message'];
            
//             $to = "assisjunior33@gmail.com";
            
//             $body = "";
            
//             $body .= "From: ".$nome. "\r\n";
//             $body .= "Email: ".$email. "\r\n";
//             $body .= "Contact: ".$contacto. "\r\n";
//             $body .= "Message: ".$message. "\r\n";
            
//             mail($to, $nome, $body);
    
//             $message_sent=true;
//         }else{
//             $invalid_class_name = "form-invalido";
//         }
    
    
//     }
// $errors = [];
// $errorMessage = '';

// if (!empty($_POST)) {
//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $message = $_POST['message'];
  
//    if (empty($name)) {
//        $errors[] = 'Preencha o campo Seu nome';
//    }

//    if (empty($email)) {
//        $errors[] = 'Preencha o campo E-mail';
//    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $errors[] = 'Email é inválido';
//    }

//    if (empty($message)) {
//        $errors[] = 'Preencha o campo Sua Mensagem';
//    }
// }

// if (empty($errors)) {
//     $toEmail = 'it.onemediamoz@gmail.com';
//     $emailSubject = 'Email vindo do website';
//     $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

//     $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
//     $body = join(PHP_EOL, $bodyParagraphs);

//     if (mail($toEmail, $emailSubject, $body, $headers)) {
//         header('Location: email-thanks.html');
//     } else {
//         $errorMessage = 'Oops, something went wrong. Please try again later';
//     }
// }else {
//    $allErrors = join('<br/>', $errors);
//    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
// }

?>

