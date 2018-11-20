<?php
 $width = 770;
 $height = 700;
 $left = 0;
 $top = 0;

 $file = fopen("../DataFiles/275.txt" , "r");
 $line = fread($file, filesize("../Datafiles/275.txt"));
 $events = explode("|", $line);
for ($i=0; $i < Count($events) ; $i++) { 
    $Break = explode(";", $events[$i]);
    createBlock($Break[0],$Break[1],$Break[2],$Break[3],$Break[4]);
}

 
function createBlock($name, $days, $Stime, $Etime, $Loc){
    $offset = 20;
    $STi =  explode(":", $Stime);
    $ETi =  explode(":", $Etime);
    $ColCount = 0;
    if($STi[1]== 30){
        $ColCount++;
    }
    if($ETi[1]== 30){
        $ColCount++;
    }

    if(1 <= $ETi[0] && $ETi[0] <= 5){
        $ColCount += $ETi[0]*2;
        $ColCount += 12 - $STi[0] ;
    }else{
        $ColCount += ($ETi[0] - $STi[0] ) *2;
    }
    $offset -= $ColCount;
    print ($offset);
    print ($ColCount); 

    $days = ["", "Sun","Mon","Tue","Wed","Thr","Fri", "Sat"];
    $cols = count($days)-1;
    $Times = ["8:00 A.M", "8:30A.M", "9:00 A.M", "9:30 A.M", "10:00 A.M", "10:30 A.M", "11:00 A.M", "11:30 A.M", "12:00 A.M", "12:30 P.M", "1:00 P.M", "1:30 P.M", "2:00 P.M", "2:30 P.M", "3:00 P.M","3:30 P.M","4:00 P.M","4:30 P.M","5:00 P.M","5:30 P.M",];
    $row = count($Times);
    echo "<table>";
    for ($i=0; $i < count($days); $i++) { 
        echo "<th>" . $days[$i] . "</th>";
    }   
    echo"</table>";
}
?>