<?php

    #Comments one line # // 
    /* Comments
    for 
    more
    than 
    one
    line 
    */

    //camelCase //lowercase //under_score
    $firstname = "Luis";
    $lastname = "Guerra";
    
    #echo $firstname;
    #print $lastname;

    //Concatenate
    /*
    echo "Name: ".$firstname;
    echo "<br>";
    print "Name: $firstname";

    $score = 10;
    echo $score;
    $variableone = "10"; 
    $variabletwo = 20;
    
    $addition = $variableone + $variabletwo;
    
    echo "Result: $addition";
    */

    function hello(){
        print "hello";
    }

    #hello();

    function hellouser($name){
        return "Hello ".$name;
    }

    #echo (hellouser("Ricardo"));

    #$month = 2;
    /*
    switch ($month) {
        case '1':
            echo "Enero";
            break;
        case '2':
            echo "Febrero";
            break;
        case '3':
            echo "Marzo";
            break;
        default:
            echo "Ninguno";
            break;
    }
    */
    $edades = array("Pablo"=>"30", "Armando"=>"25", "Regina"=>"29", "Ricardo"=>"28" );

    echo $edades["30"];

?>