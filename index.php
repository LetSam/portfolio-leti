<?php


use App\Controllers\Controller;

require_once "vendor/autoload.php";

$test = new Controller();

$test->sayHelo();


//  on recupere notre URL
$url = $_GET["page"];

if (isset($url) && !empty($url)) {

    // on match les url pour afficher les bonnes pages
    try {
        switch ($url) {
            case "/" :
            case "home":
            case "acceuil":
                echo "page d'acceuil";
                break;
            case "contact" :
                echo "page de contact";
                break;
            default : throw new Exception("la page n'existe pas");
        }

    } catch (Exception $e) {
        die( $e->getMessage() );
    }
} else {
    // afficher la page d'acceuil
    echo "afficher acceuil ";
}