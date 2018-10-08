<?php 
     
     class Database{

       private $servername = "localhost";
       private $username = "root";
       private $password = "";
       private $database = "phpblog";
       public $conn;



       //Constructor
       public function __construct(){
           $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);

           if($this->conn->connect_error){
               die("Connrction error:" . $this->conn->connect_error);
           }

           return $this->conn;
       }

       
     }



?>