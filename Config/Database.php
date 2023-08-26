<?php

namespace Config;

use PDOException;
use PDO;

class Database
{

   static function getConnection(): PDO
   {
      $host = "localhost";
      $dbname = "php_todolist";
      $user = "root";
      $pass = "";

      try {
         return new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      } catch (PDOException $exception) {
         echo "Connection failed" . $exception->getMessage();
      }
   }
}
