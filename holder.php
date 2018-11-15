<?php
    $response = "";
    $keys = array_keys($_GET);



    //vars 
    $EndTimeH = $_GET["EHour"];
    $EndTimeM = $_GET["EMin"];
    $StartTimeH = $_GET["SHour"];
    $StartTimeM = $_GET["SMin"];


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
    $rowsCount = 0;

    $response .= $_GET["SHour"] . $_GET["SMin"] . ";" .$_GET["EHour"] . $_GET["EMin"] . ";" ;
    
    if($StartTimeM== 30){
        $rowsCount++;
    }
    if($EndTimeM == 30){
        $rowsCount++;
    }

    if(1 <= $EndTimeH && $EndTimeH <= 5){
        $rowsCount += $EndTimeH*2;
        $rowsCount += 12 - $StartTimeH ;
    }else{
        $rowsCount += ($EndTimeH - $StartTimeH ) *2;
    }

    print($rowsCount + " "); 
   // print($response);
?>
