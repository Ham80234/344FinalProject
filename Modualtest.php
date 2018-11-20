<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
</head>
<body>
<p>Hello there</p>
    <div id = "Test">
    <form action="submit" method = "GET" >
        <input type="button" value="Submit">
    </form>
        <?php
        if(isset($_GET['Submit'])){
            include "Form.php";
        } 
        
        ?>
    </div>
</body>
</html>