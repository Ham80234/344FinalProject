<?php
 $location = "";
 $days = null;
 $StartTime = 0;
 $EndTime = 0;
 $Event = "";

 $Result;



 $location = $_GET["Loc"];
 $Event = $_GET["Instr"];

 $StartTime = $_GET["SHour"] . ":" . $_GET["SMin"];
 $EndTime = $_GET["EHour"] . ":" . $_GET["EMin"];

 $keys = array_keys($_GET);

foreach ($keys as $key) {
    if($key == "Mon"){
        $days .= 1;
    }
    if($key == "Tue"){
        $days .= 2;
    }
    if($key == "Wed"){
        $days .= 3;
    }
    if($key == "Thr"){
        $days .= 4;
    }
    if($key == "Fri"){
        $days .= 5;
    }
   
}
$Result = $Event . ";" . $days . ";" .$StartTime . ";" . $EndTime . ";" . $location;
print($Result);
?>