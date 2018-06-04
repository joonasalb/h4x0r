<?php
header('Content-Type: text/html; charset=utf-8');

if (basename($_SERVER["PHP_SELF"]) == "wosh.conexao.class.php") {
   
   header('Location: ./');

}

//class Conexao {

  // $servidor = 'localhost';
  // $base     = 'h4x0r';
  // $charset  = 'utf8';

  define ("HOST", "localhost"); //astrogepac.org.mysql
  define ("BASE", "h4x0r"); // astrogepac_org_h4x0r
  define ("USER", "root"); // astrogepac_org_h4x0r
  define ("PASS", "");

    function Go(){
    
    global $mysqli;

    //$host  = "localhost";
    //$user  = "root";
    //$pwd   = "";
    //$banco = "h4x0r";

    $mysqli = new mysqli(HOST,USER,PASS,BASE);
  
  }

// }


/*
try {

    $pdo = new PDO("mysql:host=$servidor; dbname=$base; charset=$charset; ", USER, PASS);  

} catch(PDOException $e) {

    // echo $e->getMessage();
	echo "=/";

    exit;
}


class Connection {
   
      public static $instance;
   
      private function __construct() {
          
      }
   
      public static function getInstance() {
          if (!isset(self::$instance)) {
              
              self::$instance = new PDO('mysql:host=localhost;dbname=basedetestes', 'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
              self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
          }
   
          return self::$instance;
      }
   
  }
      $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);

    // Sets the session name to the one set above.
    session_name($session_name);

    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. */