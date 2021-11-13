<?php


use App\Controllers\HomeController;

require_once "vendor/autoload.php";

$test = new HomeController();


echo "<pre>";

//  on recupere notre URL
$page = $_GET["page"];


// traitement de notre url

try {
    // on traie le cas où l'url est sur index.php ( donc vide )
    if ( empty($_GET["page"]) ) {
        $test->home();
    } else {

    }

} catch (Exception $e) {
    die( $e->getMessage() );
}






























// on va casser notre url pour savoir si on a plusieur demande
$page = explode('/', $page);
var_dump($page);

if (isset($url) && !empty($url)) {

    // on match les url pour afficher les bonnes pages
    try {
        switch ($url) {
            case "/" :
            case "home":
            case "acceuil":
                $test->home();
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