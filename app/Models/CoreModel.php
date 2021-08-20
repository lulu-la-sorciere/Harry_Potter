<?php

namespace HarryPotter\Models;
use PDO;

abstract class CoreModel
{
    /**
     * @var int
     */
    protected $ID;

    protected $description;
    protected $picture;


    public abstract static function find($id);
    public abstract static function findAll();
    protected abstract function insert();
    protected abstract function update();
    public abstract function delete();

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of id
     *
     * @param  int  $ID
     *
     * @return  self
     */ 
    public function setID(int $ID)
    {
        $this->ID = $ID;

        return $this;
    }
    

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
