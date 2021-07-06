<?php 

namespace HarryPotter\Controllers;

use HarryPotter\Controllers\CoreController;

class MainController extends CoreController
{
    public function home ()
    {
        $this->show('main/home');
    }
}