<?php

namespace HarryPotter\Controllers;

use HarryPotter\Controllers\CoreController;
use HarryPotter\Models\House;
use HarryPotter\Models\Character;

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

    /**
     * Method for displaying the Details House
     *
     * @param [type] $id
     * @return void
     */
    public function detail($id)
    {
        
        $house = House::find($id);
     //dump($house, $house->getName());
        $character = Character::find($house->getName());

        //dump($character);
        $this->show('houses/detail', [
            "title" => "Maison ". $house->getName(),
            "house" => $house,
            "character"=>$character,
        ]);
    }
}