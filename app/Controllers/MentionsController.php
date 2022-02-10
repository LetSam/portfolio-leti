<?php

namespace App\Controllers;

class MentionsController extends Controller{


    /**
     * affiche la page de mentions légales
     */
    public function mentions()
    { 
        $this->views("Portfolio - Liticia TADJER", "Page du mentions légales", "mentions");
    }
}