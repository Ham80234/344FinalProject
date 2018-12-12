// Creates a validation form
function validateForm() {
    // Creating start time
    var startTime = parseInt(document.forms["myForm"]["SHour"].value);
    // Creating minimum start time
    var startMin = parseInt(document.forms["myForm"]["SMin"].value);
    // Creating end time
    var endTime = parseInt(document.forms["myForm"]["EHour"].value);
    // Creating minimum end time
    var endMin = parseInt(document.forms["myForm"]["EMin"].value);
    // Array for valid times
    var Valid = [1,2,3,4,5,6,7,8,9,10,11,12];
    var ETemp = endTime; 
    var STemp = startTime;
    if(ETemp >= 1 && ETemp <= 5){
        ETemp += 12;
    }
    if(STemp >= 1 && STemp <= 5){
        STemp += 12;
    }
    // If function for end time being greater than start time
    if(STemp > ETemp) {
        Alertcreate('Your end time is greater than your start time.');
        return false;
    }
    // If function for invalid start time
    if(Valid.indexOf(startTime) == -1){
        Alertcreate('Your start time is not valid.');
        return false;
    }
    // If function for invalid end time
    if(Valid.indexOf(endTime) == -1){
        Alertcreate('Your end time is not valid.');
        return false;
    }
    // If function for times not equalling
    if(startTime == endTime && endMin != 30){
        Alertcreate('Your start and end time cannot equal.');
        return false;
    }
}
// Creates Message
function Alertcreate(msg){
    alert(msg);
}
// Clears Form
function clearForm() {
    document.forms["myForm"]["SHour"].value = "";
    document.forms["myForm"]["EHour"].value = "";
    document.forms["myForm"]["SMin"].value = "00";
    document.forms["myForm"]["EMin"].value = "00";
    document.forms["myForm"]["Instr"].value = "";
    document.forms["myForm"]["Class"].value = "234";

  }
