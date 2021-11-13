<?php


use App\Controllers\HomeController;
require_once "vendor/autoload.php";

$app = new HomeController();
//  on recupere notre URL
$page = $_GET["page"];

// on casse l'url

$page = explode('/', $page);

// traitement de notre url

try {
    // on traie le cas où l'url est sur index.php ( donc vide )
    if ( empty($_GET["page"]) ) {
        $app->home();
    } else {
        // on va traiter tous les info a partir de index 0
        switch ($page[0]) {
            case '/':
            case 'home':
                $app->home();
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