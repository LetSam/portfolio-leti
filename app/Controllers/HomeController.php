<?php

namespace App\Controllers;

class HomeController extends Controller {


    /**
     * affiche la page d'acceuil
     */
    public function home()
    {
        $this->views("home");
    }
}