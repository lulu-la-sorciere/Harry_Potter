<?php

namespace HarryPotter\Utils;

use PDO;


// Design Pattern : Singleton
class Database
{
    /** @var PDO */
    private $dbh;
    private static $_instance;
    private function __construct()
    {
        // Retrieving data from the config file
        // the parse_ini_file function parse the file and return an associative array
        $configData = parse_ini_file(__DIR__ . '/../config.ini');

        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Displays SQL errors on the screen
            );
        } catch (\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage() . '<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
    // the unique method you need to use
    public static function getPDO()
    {
        // If no instance => create one
        if (empty(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance->dbh;
    }
}
