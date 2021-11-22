<?php

namespace App\Controllers;

class HomeController extends Controller {


    /**
     * affiche la page d'acceuil
     */
    public function home()
    {
        $this->views("Portfolio - Liticia TADJER", "Page du portfolio", "home");
    }
}