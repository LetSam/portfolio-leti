<?php

namespace App\Controllers;

require "App/Core/phpmailer/PHPMailer.php";
require "App/Core/phpmailer/Exception.php";
require "App/Core/phpmailer/SMTP.php";



use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class ContactController extends Controller
{

    public function contact()
    {
        $nom = htmlentities($_POST["nom"]);
        $job = htmlentities($_POST["job"]);
        $email = htmlentities($_POST["email"]);
        $msg = ($_POST["message"]);


        if(!empty($_POST["nom"]) &&
            !empty($_POST["job"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["message"])
            )
        {

            $mail = new PHPMailer(); // appel de php mailer avec l'exeption a true
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth= "true";
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = "587";
                $mail->Username= 'liticiatadjer35@gmail.com';
                $mail->Password= 'Letty@021112/';
                $mail->Subject = 'PORTEFOLIO MESSAGE'.$email;
                $mail->setFrom($email);
                $mail->Body = '<h3> NOM : '.$nom. '<br> EMAIL : '.$email.' </h3> <br>'.$msg;

                $mail->addAddress("liticiatadjer35@gmail.com");

                $mail->SMTPDebug = SMTP::DEBUG_SERVER; // info sur le debug

                // charset
                $mail->CharSet = "UTF-8";
                // destinataire
                // expediteur

                // contenu
                $mail->isHTML(true);
                // envoi du message

                $mail->send();

                $_SESSION["alert"] = [
                    "message" => "Merci, votre message a bien été envoyé !"
                ];

            } catch (Exception $ex) {
                $_SESSION["alert"] = [
                    "message" => "Votre message n'a pas pu être envoyé",
                ];
            }
        } else {
            $_SESSION["alert"] = [
                "message" => "Votre message n'a pas pu être envoyé"
            ];
        }
        header('Location:/portfolio-leti');
        die();


    }
}