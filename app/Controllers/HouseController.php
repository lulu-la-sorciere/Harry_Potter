<?php

namespace HarryPotter\Controllers;

use HarryPotter\Controllers\CoreController;
use HarryPotter\Models\House;

class HouseController extends CoreController
{
    /**
     * 
     * Method for displaying the Houses List
     *
     * @return void
     */
    public function list()
    {
        $houses = House::findAll();
       

        $this->show('houses/list', [
            "title" => "Les Différentes Écoles et Maison du monde de Harry Potter",
            "houses" =>$houses,
        ]);
    }
}