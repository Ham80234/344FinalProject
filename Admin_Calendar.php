<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calender</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
<?php
    
    $days = ["", "Sun","Mon","Tue","Wed","Thr","Fri", "Sat"];
    $cols = count($days)-1;
    $Admin = ["Add Schedual", "Edit", "Delete"];
    $Times = ["8:00 A.M", "8:30A.M", "9:00 A.M", "9:30 A.M", "10:00 A.M", "10:30 A.M", "11:00 A.M", "11:30 A.M", "12:00 A.M", "12:30 P.M", "1:00 P.M", "1:30 P.M", "2:00 P.M", "2:30 P.M", "3:00 P.M","3:30 P.M","4:00 P.M","4:30 P.M","5:00 P.M","5:30 P.M",];
    $row = count($Times);


    echo "<table>";
    for ($i=0; $i < count($days); $i++) { 

        echo "<th>" . $days[$i] . "</th>";
    }
    for ($i=0; $i < $row; $i++) {
        
        if($i % 2 == 0){
            echo "<tr class=\"odd\">". "<th>" . $Times[$i] . "</th>" ;
        }else{
            echo "<tr class=\"even\">". "<th>" . $Times[$i] . "</th>" ;
        }
        for ($j=0; $j < $cols; $j++) { 
            echo "<td></td>";
        }
    }
    echo "</table>";

    echo "<table id = \"control\" > <tr>";
    for ($j=0; $j < count($Admin); $j++) { 
        echo "<td> <button onclick=\"alert('".$Admin[$j]."')\">" . $Admin[$j]. "</button></td>"; 
    }
    echo "</tr></table>"
?>