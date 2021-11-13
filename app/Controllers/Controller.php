<?php

namespace App\Controllers;

class Controller
{

    /**
     * affiche une vue
     * @param $path
     */
    public function views($path) {

        require_once "app/views/$path.php";
    }

}