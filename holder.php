<?php
    $response = "";
    $keys = array_keys($_GET);

    foreach ($keys as $key) {
        if($key == "Mon"){
            $response .= "monday;";
        }
        if($key == "Tue"){
            $response .= "tuesday;";
        }
        if($key == "Wed"){
            $response .= "wednesday;";
        }
        if($key == "Thr"){
            $response .= "thursday;";
        }
        if($key == "Fri"){
            $response .= "friday;";
        }
        if($key == "Sat"){
            $response .= "saturday;";
        }
        if($key == "Sun"){
            $response .= "sunday;";
        }
    }
    $response .= $_GET["SHour"] . $_GET["SMin"] . ";" .$_GET["EHour"] . $_GET["EMin"] . ";" ;
    $colsCount = $_GET["SHour"] * 2; 
    print($colsCount); 
    print($response);
?>
