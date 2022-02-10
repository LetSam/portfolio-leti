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

            $mail = new PHPMailer(true); // appel de php mailer avec l'exeption a true
            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER; // info sur le debug
                $mail->isSMTP(); //envoie via la methode isSMTP
                $mail->SMTPAuth= true; // activer SMTP authentication
                $mail->Host = 'smtp.gmail.com';  // SMTP server
                $mail->Username= 'liticiatadjer35@gmail.com'; 
                $mail->Password= 'Letty@021112/';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
                $mail->Port = "587";

                // charset
                $mail->CharSet = "UTF-8";
                // destinataire
                $mail->addAddress("liticiatadjer35@gmail.com");
                // expediteur
                $mail->setFrom($email);

                // contenu de l'email reçu
                $mail->isHTML(true); //pour préciser que l'on interprete body en html
                $mail->Subject = 'PORTFOLIO MESSAGE'.$email;
                $mail->Body = '<h3> NOM : '.$nom. '<br> EMAIL : '.$email.' </h3> <br>'.$msg;

                // envoi du message

                $mail->send();

                $_SESSION["alert"] = [
                    "message" => "Merci, votre message a bien été envoyé",
                    "color" => "mediumspringgreen"
                ];

            } catch (Exception $ex) {
                $_SESSION["alert"] = [
                    "message" => "Votre message n'a pas pu être envoyé",
                    "color" => "crimson"
                ];
            }
        } else {
            $_SESSION["alert"] = [
                "message" => "Votre message n'a pas pu être envoyé",
                "color" => "crimson"
            ];
        }
        header('Location:/fichiers/portfolio-leti');
        die();


    }
}