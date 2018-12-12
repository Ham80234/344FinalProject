<?php
    /*
    In this php we get the line number (or class) should be deleted and we replace
    the whole line with nothing in it.
    If user selects delte all then we use the same idea to replace the whole file
    with nothing 
    */
     $fileName = "../data.txt";
     $data = fopen($fileName, "a");

    if($_GET['Class'] == "234"){
        $line_i_am_looking_for = 0;
        $lines = file( $fileName , FILE_IGNORE_NEW_LINES );
        $lines[$line_i_am_looking_for] = "";
        file_put_contents( $fileName , implode( "\n", $lines)); 
    }
    if($_GET['Class'] == "275"){

        $line_i_am_looking_for = 1;
        $lines = file( $fileName , FILE_IGNORE_NEW_LINES );
        $lines[$line_i_am_looking_for] = "";
        file_put_contents( $fileName , implode( "\n", $lines )); 
    }
    if($_GET['Class'] == "313"){
        $line_i_am_looking_for = 2;
        $lines = file( $fileName , FILE_IGNORE_NEW_LINES);
        $lines[$line_i_am_looking_for] = "";
        file_put_contents( $fileName , implode( "\n", $lines));
    }
    if($_GET['Class'] == "341"){
        $line_i_am_looking_for = 3;
        $lines = file( $fileName , FILE_IGNORE_NEW_LINES );
        $lines[$line_i_am_looking_for] = "";
        file_put_contents( $fileName , implode( "\n", $lines ));
    }
    if($_GET['Class'] == "375"){
        $line_i_am_looking_for = 4;
        $lines = file( $fileName , FILE_IGNORE_NEW_LINES );
        $lines[$line_i_am_looking_for] = "";
        file_put_contents( $fileName , implode( "\n", $lines ));
    }
    if($_GET['Class'] == "delete"){
        $fileName = "../data.txt";
        fopen($fileName, "w");   
     }



?>


<script> window.location="../Admin_index.php";</script>oull

