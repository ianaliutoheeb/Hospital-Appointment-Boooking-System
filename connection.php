<?php

    $database= new mysqli("localhost","root","","jamaa hospital bs");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>