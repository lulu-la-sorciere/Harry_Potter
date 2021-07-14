<?php 

namespace HarryPotter\Controllers;

use HarryPotter\Controllers\CoreController;

class MainController extends CoreController
{
    /**
     * Method for displaying the Home page
     *
     * @return void
     */
    public function home ()
    {
        $title = "Accueil";

        $this->show('main/home', [
            "title" => $title,
        ]);
    }
}