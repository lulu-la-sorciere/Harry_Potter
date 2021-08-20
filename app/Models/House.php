<?php

namespace HarryPotter\Models;

use HarryPotter\Models\CoreModel;
use HarryPotter\Utils\Database;
use PDO;

//Model for the table "house"
class House extends CoreModel
{
    // I define every field as a property
    protected $name; 
   

    // I must implements these methods

    /**
     * Method to find the informations about a house based on its ID
     *
     * @param [type] $id
     * @return $house
     */
    public static function find($id)
    {
        $sql = " SELECT *
                 FROM House 
                 WHERE id = :id" ;

        $pdo = Database::getPDO();

        $request = $pdo->prepare($sql);
        $request->execute([':id' => $id ]);

        $request->setFetchMode(PDO::FETCH_CLASS, self::class);

        $house = $request->fetch();

        return $house;

    }

    /**
     * Method to find all houses
     *
     * @return $houses
     */
    public static function findAll()
    {
        $sql = " SELECT * 
                 FROM House ";
        $pdo = Database::getPDO();

        $request = $pdo->query($sql);
        $houses = $request->fetchAll(PDO::FETCH_CLASS, self::class);

        return $houses;

    }

    protected function insert()
    {
        //TODO
    }

    protected function update()
    {
        //TODO
    }

    public function delete()
    {
        //TODO
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}