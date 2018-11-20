<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../main.css" />
    <script src="main.js"></script>
</head>
<
<?php
  

   //class which creates a schedule in html
   //holds a collection of Event objects (defined below)

      //member variables
       $width =770; //total width of schedule 
       $height=431.31; //total height of schedule
       $left=0; //left offset of schedule
       $top=0; //top offset of schedule
       $beginTime = "8:30";
       $finishTime = "16:30";
       $events = array();
       $padding =5; //side padding of schedule 


            //member variables
       $id = $_GET["type"];  //name of event
       $days =""; //which days of the week (e.g. "135" for MWF)
      $keys = array_keys($_GET);
    foreach ($keys as $key) {
        if($key == "Mon"){
            $days .= "1";
        }
        if($key == "Tue"){
            $days .= "2";
        }
        if($key == "Wed"){
            $days .= "3";
        }
        if($key == "Thr"){
            $days .= "4";
        }
        if($key == "Fri"){
            $days .= "5";
        }
        if($key == "Sat"){
            $days .= "6";
        }
        if($key == "Sun"){
            $days .= "7";
        }
    }

       $startTime = $_GET["SHour"] . ":". $_GET["SMin"]; //format "hour:min" in military time
       $endTime   = $_GET["EHour"] . ":". $_GET["EMin"]; //format "hour:min"
       $location = $_GET["Loc"]; //location of event
       $required=1; //1 for required, 0 otherwise

//("ID: 123", "days: 12345", "starttime: 12:00", " end time13:30", "location: Watkins");





      //prints to HTML
  //    function printHTML(){
         //cumulative width and height of event cells
         $totalWidth = $width - $padding*6;
         $totalHeight = Widthcount()* 50;

         $totalTime = TimeToNumeric($finishTime) - TimeToNumeric($beginTime);
         //echo($totalTime."TOTAL TIME");

         //width of a single column of events
         $colwidth = $totalWidth * 0.2;
 
         //start and end horizontal locations of each column
         $starts[1] = $left + $padding +120;
         $ends[1] = $starts[1] + $colwidth;
         $starts[2] = $ends[1] + $padding;
         $ends[2] = $starts[2] + $colwidth;
         $starts[3] = $ends[2] + $padding;
         $ends[3] = $starts[3] + $colwidth;
         $starts[4] = $ends[3] + $padding;
         $ends[4] = $starts[4] + $colwidth;
         $starts[5] = $ends[4] + $padding;
         $ends[5] = $starts[5] + $colwidth;
       

         

         echo "<div class='background' style='position:absolute left:${left}px; top:${top}px; height:${height}px width:${width}px'>\n";
         
         echo "<div class='weeklabel' align=center style='position:absolute; left:$starts[1]px; top:${top}px; width:${colwidth}px'>Monday</div>\n";
         echo "<div class='weeklabel' align=center style='position:absolute; left:$starts[2]px; top:${top}px; width:${colwidth}px'>Tuesday</div>\n";
         echo "<div class='weeklabel' align=center style='position:absolute; left:$starts[3]px; top:${top}px; width:${colwidth}px'>Wednesday</div>\n";
         echo "<div class='weeklabel' align=center style='position:absolute; left:$starts[4]px; top:${top}px; width:${colwidth}px'>Thursday</div>\n";
         echo "<div class='weeklabel' align=center style='position:absolute; left:$starts[5]px; top:${top}px; width:${colwidth}px'>Friday</div>\n";
         $top += 18.44+$padding + (TimeToNumeric($startTime) - TimeToNumeric($beginTime)) * $totalHeight / $totalTime;
            for($i = 1; $i <= 5; $i++)
            {
               $startTime = TimeToNumeric($startTime);
              // echo($startTime."Event Start Time");
               $endTime = TimeToNumeric($endTime);

               $interval = TimeToNumeric($finishTime) - TimeToNumeric($startTime);
              // echo($interval."Interval Time");
                
               //   $top += $padding + (TimeToNumeric($startTime) - TimeToNumeric($beginTime)) * $totalHeight / $totalTime;
               $height = $totalHeight * $interval / $totalTime; 
            
               
               $startTime = AMtoPM($startTime);
               $endTime = AMtoPM($endTime);

               $cssClass = "required";
               if($required == 0)
               {
                  $cssClass = "tentative";
               }
               $z = 1;
        
               if(preg_match("/$i/", $days) == 1)
                {
               
                 
                  $html = "<div class='$cssClass' align=center style='position:absolute; left:$starts[$i]px; top:${top}px; width:${colwidth}px; height:${height}px; z-index:$z'>\n";
                
                  $html .= "<b>$id</b><br><i>$location</i><br>$startTime - $endTime\n";
                  $html .= "</div>\n";
                  echo $html;
               }
            } 
 //        } //end of for each
         echo "</div>\n";


   //converts time to a real number
   //example: 8:45 will convert to 8.75
   function TimeToNumeric($time)
   {
      $hourMinute = explode(":", $time);
 //    $new_time = (int)($hourMinute[0] + ($hourMinute[1]/60.0));
  //    return $new_time;

      $hr = (int) $hourMinute[0];
      if(isset($hourMinute[1])){
      $min = (int) ($hourMinute[1])/60.0;
      $hr += $min;
      }
      $new_time = $hr;

      return $new_time;
   }

   //converts 24 hour time (where 13 = 1PM and ) time to AM/PM time string
   //example: "17:40" will convert to "5:40 PM"
   function AMtoPM($time)
   {
    $min;
    $hour;
      $hourMinute = explode(".", $time);
        if(isset($hourMinute[1])){
            $min = $hourMinute[1]/10 *  60;
        }
      if($hourMinute[0] <= 12)
      {
         if($hourMinute[0] == 0)
         {
            $hourMinute[0] = 12;
         }

         if(isset($hourMinute[1])){
            $new_time = $hourMinute[0].":".$min. "AM";
         }else{
            $new_time = $hourMinute[0].":00 AM";
         }
     
      }
      else
      {
         if($hourMinute[0] != 12)
         {
            $hourMinute[0] -= 12;
         }
         
         if(isset($hourMinute[1])){
            $new_time = $hourMinute[0].":".$min. "PM";
         }else{
            $new_time = $hourMinute[0].":00 PM";
         }
      }
      return $new_time;
   }

   function Widthcount(){
    $EndTimeH = $_GET["EHour"];
    $EndTimeM = $_GET["EMin"];
    $StartTimeH = $_GET["SHour"];
    $StartTimeM = $_GET["SMin"];
    $rowsCount = 0;

   
    
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
    print($rowsCount);
    return $rowsCount;
  
   }
?>
