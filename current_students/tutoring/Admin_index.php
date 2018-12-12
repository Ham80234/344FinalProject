  <!-- Modal Creation -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Data Validation File -->
  <script src="js/dataval.js"></script>
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h2>Tutoring Admin Page</h2>
        </div>
    </div>
    <div class="row"><img src="<?=$path?>/img/line.svg"></div>       
         
    <div class="row"> 
        <div class="large-12 columns">                  
        </div>
        <button  id="button3" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Tutor</button>
        <button  id="button4" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Delete"><i class="fa fa-close"></i> Delete</button>             
        <div class="large-12 columns">
        <form>
            <select name="users" onchange="updateTable(this.value)">
            <option value="">Select a Class:</option>
            <option value="234">CS 234/250</option>
            <option value="275">CS 275</option>
            <option value="313">CS 313</option>
            <option value="341">CS 341</option>
            <option value="375">CS 375</option>
            </select>
        </form>
        
        
        <table id="maintable">
                
            <tr>
                <th></th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>
            
            <tr>
                <th>8:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>8:30</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>9:00</th>
    
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>9:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>10:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>10:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>11:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>11:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>12:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>12:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>1:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
            <tr>
                <th>1:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>2:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>2:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>3:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>3:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>4:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>4:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>5:00</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            
            <tr>
                <th>5:30</th>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
     
        </table>

        
        </div>         
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Tutor</h4>
      </div>
      <div class="modal-body">
      <div id="Module-Container">

<form name="myForm" onsubmit="return validateForm()" action="Writer.php" method="GET">     
    <table>
        <tr>
            <td>
                <label for="Mon">Monday</label>
                <input type="checkbox" name="Mon" id="Mon">
            </td>
            <td>
                <label for="Tue">Tuesday</label>
                <input type="checkbox" name="Tue" id="Tue">
            </td>
            <td>
                <label for="Wed">Wednesday</label>
                <input type="checkbox" name="Wed" id="Wed">
            </td>
            <td>
                <label for="Thr">Thursday</label>
                <input type="checkbox" name="Thr" id="Thr">
            </td>
            <td>
                <label for="Fri">Friday</label>
                <input type="checkbox" name="Fri" id="Fri">
            </td>

    </table>
    <hr>
    <table id="Time-input">
        <td><label for="Start">Start Time</label></td>
        <tr>
            <td>
                <input class="hour_textbox"  name= "SHour" required type="text" maxlength="2" placeholder="12">
            </td>
            <td>
                <label>:</label>
            </td>
            <td>
            <select name ="SMin">
                <option value="00">00</option>
                <option value="30">30</option>
            </select>
            </td>
        </tr>
        <td><label for="End">End Time</label></td>
        <tr>
            <td>
                <input class="hour_textbox" type="text" name="EHour" required maxlength="2" placeholder="12">
            </td>
            <td>
                    <label>:</label>
                </td>
            <td>
            <select name= "EMin">
                <option value="00">00</option>
                <option value="30">30</option>
            </select>
            </td>
        </tr>
    </table>
    <hr>
    <table id="Instructor">
        <td>
            <label for="Type">Class</label>
        </td>
        <tr>
            <td>
                    <select name="Class">
                            <option value="234">234/250</option>
                            <option value="275">275</option>
                            <option value="313">313</option>
                            <option value="341">341</option>
                            <option value="375">375</option>
                          </select>
             </td>
        </tr>
        <td>
            <label for="Type">Tutor</label>
        </td>
        <tr>
            <td>
                <input type="text" name="tutor" required placeholder="full name">
            </td>
        </tr>
       
        <td>
            <label for="Type">Location:</label>
            ` <tr>
                <td>
                    <input type="text" name= "Loc" required placeholder="Location">
                </td>
            </tr> 
    </table>
<button type="submit" value="Submit" id="button1">Submit</button>
<button type="reset" value="Reset" id="clearButton" onclick="clearForm()">Clear All</button>
</form>
</div>
    </div>
      <div class="modal-footer">
        <button type="button" id="button2" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="Delete" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete</h4>
        </div>
        <div class="modal-body">
                <?php include "Php/delete.php"; ?>
        </div>
        <div class="modal-footer">
          <button type="button" id="button2" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<?php
    include $path."footer.php";
?>        
<script src="js/tableFunctions.js"></script>

</body>
</html>
