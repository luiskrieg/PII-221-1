<?php

    include_once 'Database.php';

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    
    $objectCreateUser = new Database($hostname,$username,$password,$database);
    
    $table = "users";
    $email    = $_POST['email'];
    $password = $_POST['password'];
    /*
    echo $email;
    echo $password;
    */    
    $objectCreateUser -> create($table, $email,$password);

?>