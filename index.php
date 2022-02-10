<?php

session_start();
use App\Controllers\HomeController;
use App\Controllers\ContactController;
use App\Controllers\MentionsController;

require_once "vendor/autoload.php";

$app = new HomeController();
$contact = new ContactController();
$mentions = new MentionsController();


// on casse l'url

$page = explode('/', filter_var($_GET["page"]), FILTER_SANITIZE_URL);


// traitement de notre url

try {
    // on traite le cas où l'url est sur index.php ( donc vide )
    if ( empty($_GET["page"]) ) {
        $app->home();
    } else {
        // on va traiter toute les info à partir de index 0
        switch ($page[0]) {
            case '/':
            case 'home':
                $app->home();
                break;
            case 'contact':
                $contact->contact();
                break;
            case 'mentions':
                $mentions->mentions();
                break;
            case 'admin':
                if ($page[1] === 'dashboard') {
                    echo "la page d'acceuil de l'administrateur";
                }
                if ($page[1] === 'login') {
                    echo "la page de connexion de l'adminitrateur (lety)";
                }
                break;
        }
    }
} catch (Exception $e) {
    die( $e->getMessage() );
}