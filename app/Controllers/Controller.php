<?php

namespace App\Controllers;

class Controller
{

    /**
     * affiche une vue
     * @param $path
     */
    public function views( $title, $description, $path) {

        ob_start(); //chargement de notre page
        require_once "app/views/$path.view.php";
        $contents = ob_get_clean();
        require_once  "app/views/template/layout.php";
    }

}