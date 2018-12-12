 <?php 
    $fileName = "data.txt";
    $filer = "*";
    $day = daybreak();
    $text = $_GET["tutor"];
    $location = $_GET['Loc'];
    $down = Howfardown();
    $widthc = Widthcount();
    $array = ["","","","",""];
    
    //if the file is empty (after using delete all) put some blank lines
    if (filesize($fileName) == 0){
    file_put_contents($fileName, "\n"."\n"."\n"."\n"."\n"."\n");

}

    for($i=0  ; $i < count($day); $i++) { 
    
    $temp = $day[$i] . "," .$down.",". $text  . ",". $widthc .",". $location. $filer;
    $result = $temp;    
  
    if($_GET['Class'] == "234"){
        writeToFile($fileName, 0, $result, $temp);
    }
    if($_GET['Class'] == "275"){
        writeToFile($fileName, 1, $result, $temp);
    }
    if($_GET['Class'] == "313"){
        writeToFile($fileName, 2, $result, $temp);
    }
    if($_GET['Class'] == "341"){
        writeToFile($fileName, 3, $result, $temp);
    }
    if($_GET['Class'] == "375"){
        writeToFile($fileName, 4, $result, $temp); 
    }

} 
  

//function to write content to file
function writeToFile($fileName,$lineNum,$content, $append){
        /* The way this functions works is it gets fileName defind at the top
        lineNum according to what class was choosen and the content of that file
        and what needs to appened in future all these variables are define at the top
        */
        $lines = file( $fileName , FILE_IGNORE_NEW_LINES );
        //check if line is set or not this is or empty cases
        if(!isset($lines[$lineNum])){
            $lines[$lineNum] = "";
        }
        //to append data to our file
        if(strlen($lines[$lineNum]) > 0){
            $content = $lines[$lineNum];
            $newContent = $content . $append;
            $lines[$lineNum] = $newContent;
        }
        //if the line of the class is empty then
        //we don't need to appened anything to it
        if(strlen($lines[$lineNum]) == 0){     
        $lines[$lineNum] = $content;
        }
        file_put_contents($fileName , implode( "\n", $lines));
        end($lines);
}






    function Widthcount(){
        /*
        The way this function works is by getting both the end time and start time and finding there index in an array 
        of all possible time, then simply subtracts them.
        */
        $times= ['8:30','9:00', '9:30','10:00', '10:30','11:00', '11:30','12:00', '12:30','1:00','1:30','2:00', '2:30','3:00', '3:30','4:00',  '4:30','5:00', '5:30' ];
        
        $ET = $_GET["EHour"] .":".$_GET["EMin"]; // combines the hours and min of end time 12  + 30  >> 12:30
        $indexET = array_search($ET, $times); //grabs the array index of that element
       
        $ST = $_GET["SHour"]. ":" . $_GET["SMin"]; // same as line 75 but with start time
        $indexST = array_search($ST, $times);// same as line 76 
        
        $RC = 1; //  row counter
        if($indexST == 0){
            $RC +=1;
        }
        $RC += $indexET - $indexST; // subtracts the entime from start time
        
        return $RC; // returns Row count
       
        }
    function Howfardown(){
        /*
             The way this function works is by getting the start time and finding there index in an array 
        of all possible time, then uses the that to determine the downcount, or how far down the event should be 

        */
        $times= ['8:30','9:00', '9:30','10:00', '10:30','11:00', '11:30','12:00', '12:30','1:00','1:30','2:00', '2:30','3:00', '3:30','4:00',  '4:30','5:00', '5:30' ];
        
        $ST = $_GET["SHour"]. ":" . $_GET["SMin"]; // gets the start time 
        $downCount = array_search($ST, $times)+3; //this findes the index of that timeand adds the offset
        if($downCount == 3){
            $downCount -=1;
        }

        return $downCount;
    }
   
    function daybreak(){
        $days = [];
        $keys = array_keys($_GET); // usese the get arrary tpo determin what days were selected using if statments 
 
    for ($i=0; $i < count($keys); $i++) {
                if($keys[$i] == "Mon"){
                    array_push($days, "monday");
                }
                if($keys[$i] == "Tue"){
                    array_push($days, "tuesday");
                }
                if($keys[$i] == "Wed"){
                    array_push($days, "wednesday");
                }
                if($keys[$i] == "Thr"){
                    array_push($days, "thursday");
                }
                if($keys[$i] == "Fri"){
                    array_push($days, "friday");
                }
 
        }
       
        return $days;
       
        }
 
 
 

?>
<script> window.location = "Admin_index.php"; </script> 