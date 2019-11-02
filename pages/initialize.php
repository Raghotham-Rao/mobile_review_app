<?php

    $jsonFile = file_get_contents("phone_details.json", TRUE);
    $data = json_decode($jsonFile, true);

    $phones = array();
    $brands = array();

    foreach($data as $key=>$v){
        $phones[] = $key;
        $b = explode(" ", $key)[0];
        if(!(in_array($b, $brands)))
            $brands[] = $b;
    }
?>