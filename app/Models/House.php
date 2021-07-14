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

    public static function find($id)
    {
        //TODO
    }

    public static function findAll()
    {
        $sql = " SELECT * 
                 FROM House ";
        $pdo = Database::getPDO();

        $resquest = $pdo->query($sql);
        $houses = $resquest->fetchAll(PDO::FETCH_CLASS, self::class);

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