<?php 

  class Database{

    #Attibutes
    public $hostname;
    public $username;
    public $password;
    public $database;

    #Constructor
    public function __construct($hostname, $username, $password, $database){
        $this -> hostname = $hostname;
        $this -> username = $username;
        $this -> password = $password;
        $this -> database = $database;
    }

    #Method
    public function testconnect(){
        $connection = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> database);
        if ($connection -> connect_error) {
            die("Connection failed: ".$connection -> connect_errno);
        }
        echo "Connected successfully";
    }

    #Create method
    public function create($table, $email,$password ){
        $connection = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> database);
        if ($connection -> connect_error) {
            die("Connection failed: ".$connection -> connect_errno);
        }
        #echo "Connected successfully";
        $query = "INSERT INTO $table (email, password) VALUES ('$email', '$password');";
        #echo $query;
        if ($connection -> query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: ".$query."<br>".$connection -> error;
        }
        $connection -> close();
    }
  }  

?>