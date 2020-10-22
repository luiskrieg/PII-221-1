<?php

    include_once 'Database.php';

    $hostname = $_GET['hostname'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $database = $_GET['database'];

    /*  
    echo $hostname;
    echo $username;
    echo $password;
    echo $database;

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    */

    $objectdatabase = new Database($hostname,$username,$password,$database);
    $objectdatabase -> testconnect();

?>