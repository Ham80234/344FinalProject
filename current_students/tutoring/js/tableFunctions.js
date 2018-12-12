var f = [];
var r = [];
var w = [];
var t = [];
var m = [];

var allprofessorinfo = [];

$(document).ready(function() {
    $.get("data.txt", function(data){
        allprofessorinfo = data.split("\n");
       
    });
});

function resettable() {    
    $("#maintable").empty();
    $("#maintable").append("<tr><th></th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th></tr><tr><th>8:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>8:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>9:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>9:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>10:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>10:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>11:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>11:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>12:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>12:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>1:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>1:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>2:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>2:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>3:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>3:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>4:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>4:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>5:00</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr><tr><th>5:30</th><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td><td><h5></h5><p></p></td></tr>"); 
};

function updateTable(s) {
    resettable();
    m = [];
    t = [];
    w = [];
    r = [];
    f = [];

    if (s == "234") {
        fillArrays(allprofessorinfo[0]);
    }
                
    if (s == "275") {
        fillArrays(allprofessorinfo[1]);
    }
                
    if (s == "313") {
        fillArrays(allprofessorinfo[2]);
    }
                
    if (s == "341") {
        fillArrays(allprofessorinfo[3]);
    }
                
    if (s == "375") {
        fillArrays(allprofessorinfo[4]);
    }

    populatecolumns();

    }
    
function fillArrays(x) {
    var tableentries = x.split("*");
    
    for (y = 0; y < tableentries.length; y++) { 
        var tokens = tableentries[y].split(",");
     
        if (tokens[0] == "monday") {
            m.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3]), Loc: tokens[4],});
        }
                    
        if (tokens[0] == "tuesday") {
            t.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3]), Loc: tokens[4]});
        }
                    
        if (tokens[0] == "wednesday") {
            w.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3]), Loc: tokens[4]});
        }
                               
        if (tokens[0] == "thursday") {
            r.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3]), Loc: tokens[4]});
        }
                    
        if (tokens[0] == "friday") {
            f.push({spot: parseInt(tokens[1]), text: tokens[2], width: parseInt(tokens[3]), Loc: tokens[4]});
        }
    }
}
            
function populatecolumns(){
    for (y = 0; y < f.length; y++) { // for each item in the friday list
        for (z = 1; z < f[y].width; z++) { // remove the tds below the spot, otherwise cells will get pushed out of the table
        $("#maintable tr:nth-child(" + (f[y].spot+z) + ") td").first().remove();
    }

    $("#maintable tr:nth-child(" + f[y].spot + ") td:nth-child(" + 6 + ") > h5").text(f[y].text); //set the text on the correct td

    $("#maintable tr:nth-child(" + f[y].spot + ") td:nth-child(" + 6 + ") > p").text(f[y].Loc);

    $("#maintable tr:nth-child(" + f[y].spot + ") td:nth-child(" + 6 + ")").attr("rowSpan", f[y].width); //set the size, it will just fill in the cleared spots we deleted earlier
    
    $("#maintable tr:nth-child(" + f[y].spot + ") td:nth-child(" + 6 + ")").css("background-color", "lightgrey"); // give it a background color
                    
    } // add friday blocks
                          
    for (y = 0; y < r.length; y++) { // iterate through monday array, if the spot matches x
        
        for (z = 1; z < r[y].width; z++) {
            $("#maintable tr:nth-child(" + (r[y].spot+z) + ") td").first().remove();
        }
                    
        $("#maintable tr:nth-child(" + r[y].spot + ") td:nth-child(" + 5 + ") > h5").text(r[y].text);

        $("#maintable tr:nth-child(" + r[y].spot + ") td:nth-child(" + 5 + ") > p").text(r[y].Loc);

        $("#maintable tr:nth-child(" + r[y].spot + ") td:nth-child(" + 5 + ")").attr("rowSpan", r[y].width);
                    
        $("#maintable tr:nth-child(" + r[y].spot + ") td:nth-child(" + 5 + ")").css("background-color", "lightgrey"); // give it a background color
                    
        } //add thursday blocks
                
    for (y = 0; y < w.length; y++) { // iterate through monday array, if the spot matches x
        for (z = 1; z < w[y].width; z++) {
            $("#maintable tr:nth-child(" + (w[y].spot+z) + ") td").first().remove();
        }
            
        $("#maintable tr:nth-child(" + w[y].spot + ") td:nth-child(" + 4 + ") > h5").text(w[y].text);

        $("#maintable tr:nth-child(" + w[y].spot + ") td:nth-child(" + 4 + ") > p").text(w[y].Loc);

        $("#maintable tr:nth-child(" + w[y].spot + ") td:nth-child(" + 4 + ")").attr("rowSpan", w[y].width);
                    
        $("#maintable tr:nth-child(" + w[y].spot + ") td:nth-child(" + 4 + ")").css("background-color", "lightgrey"); // give it a background color
           
        } // add wednesday blocks
                
    for (y = 0; y < t.length; y++) { // iterate through monday array, if the spot matches x
        for (z = 1; z < t[y].width; z++) {
            $("#maintable tr:nth-child(" + (t[y].spot+z) + ") td").first().remove();
        }   
            
        $("#maintable tr:nth-child(" + t[y].spot + ") td:nth-child(" + 3 + ") > h5").text(t[y].text);

        $("#maintable tr:nth-child(" + t[y].spot + ") td:nth-child(" + 3 + ") > p").text(t[y].Loc);

        $("#maintable tr:nth-child(" + t[y].spot + ") td:nth-child(" + 3 + ")").attr("rowSpan", t[y].width);
                    
        $("#maintable tr:nth-child(" + t[y].spot + ") td:nth-child(" + 3 + ")").css("background-color", "lightgrey"); // give it a background color

        } // add wednesday blocks
                              
    for (y = 0; y < m.length; y++) { // iterate through monday array, if the spot matches x
        for (z = 1; z < m[y].width; z++) {
        $("#maintable tr:nth-child(" + (m[y].spot+z) + ") td").first().remove();
        }
                    
        $("#maintable tr:nth-child(" + m[y].spot + ") td:nth-child(" + 2 + ") > h5").text(m[y].text);

        $("#maintable tr:nth-child(" + m[y].spot + ") td:nth-child(" + 2 + ") > p").text(m[y].Loc);

        $("#maintable tr:nth-child(" + m[y].spot + ") td:nth-child(" + 2 + ")").attr("rowSpan", m[y].width);
                    
        $("#maintable tr:nth-child(" + m[y].spot + ") td:nth-child(" + 2 + ")").css("background-color", "lightgrey"); // give it a background color

        } // add monday blocks
                
    }
