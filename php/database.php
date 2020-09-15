<?php
/**
 * Description of database
 *
 * @author Mathis PLUMAIL 2020
 */
class database {
     private static $dbName = 'stream';
     private static $dbHost = 'localhost';
     private static $dbUsername = 'root';
     private static $dbUserPassword = '';
     private static $cont = null;
     
     public function __construct() { 
         die('Init function is not allowed');        
     }
     public static function connect() { 
        if ( null == self::$cont ) { 
            try { 
                self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
            } 
            catch(PDOException $e) { 
                 echo "<h1 class='bg-danger text-center'>La connexion à échouée<h1> 
                 <h3 class='bg-warning'>Le message d'erreur : " . $e->getMessage() . "</h3>";
            }
       } // fin de if
       return self::$cont;
    }
    public static function disconnect() {
        self::$cont = null;
    }
}