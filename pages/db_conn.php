<?php

    $conn = new mysqli('localhost', 'root', 'strictlymine', 'phone_review');

    if($conn->connect_error){
        echo "nopes";
    }
    
?>