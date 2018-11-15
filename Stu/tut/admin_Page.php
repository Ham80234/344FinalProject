<?php
    $path = "../../";
    include $path."head1.html";    
?>
	<link rel="stylesheet" type="text/css" href="css/tableStyles.css">

<?php
    include $path."head2.php"; 
?>     
        
    <!-- BANNER SECTION -->
    <div class="banner row">
        <div class="image large-12 columns">
            <img src="<?=$path?>img/tutoring.png">
            <h2>Tutoring Schedules Admin</h2>
        </div>
    </div>
    <div class="row"><img src="<?=$path?>/img/line.svg"></div>       
         
    <div class="row"> 
        <div class="large-12 columns">                
            <p> 
				*** Input Content Stuff here ****
			</p>
        </div>
                         
		<div class="large-12 columns">
       
        
      <?php
      include "../../Admin_Calendar.php";
      ?>


        </div>         
    </div>
       
<?php
    include $path."footer.php";
?>        
<script src="js/tableFunctions.js"></script>

</body>
</html> 