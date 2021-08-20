<?php

namespace HarryPotter\Models;

use HarryPotter\Models\CoreModel;
use HarryPotter\Utils\Database;
use PDO;

//Model for the table "house"
class Character extends CoreModel
{
    // I define every field as a property
    protected $lastname; 
    protected $firstname;
    protected $bio;
    protected $date;

   

    // I must implements these methods

    /**
     * Method to find the founder of the House in the Characters list
     *
     * @param [type] $lastname
     * @return $character
     */
    public static function find($name)
    {
        //SELECT  `firstname`, `lastname`, `bio`, `date`, Characters.picture FROM `Characters` INNER JOIN `House` WHERE `lastname`= "Serdaigle"
        $sql = " SELECT Characters.*, Characters.picture
                 FROM `Characters`
                 INNER JOIN `House` 
                 WHERE `lastname` = :name" ;

        $pdo = Database::getPDO();

        $request = $pdo->prepare($sql);
        $request->execute([':name' => $name ]);

        $request->setFetchMode(PDO::FETCH_CLASS, self::class);

        $character = $request->fetch();
       
        return $character;

    }

    /**
     * Method to find all Characters
     *
     * @return $characters
     */
    public static function findAll()
    {
        $sql = " SELECT * 
                 FROM `Character` ";
        $pdo = Database::getPDO();

        $request = $pdo->query($sql);
        $characters = $request->fetchAll(PDO::FETCH_CLASS, self::class);

        return $characters;

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
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of bio
     */ 
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set the value of bio
     *
     * @return  self
     */ 
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}