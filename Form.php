<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Mod-CSS.css" />
    <script src="main.js"></script>
</head>

<body>
    <div id="Module-Container">

        <form action="TutorSelect">
            <table>
                <tr>
                    <td>
                        <label for="Mon">Mon</label>
                    </td>
                    <td>
                        <label for="Tue">Tue</label>
                    </td>
                    <td>
                        <label for="Wed">Wed</label>
                    </td>
                    <td>
                        <label for="Thr">Thr</label>
                    </td>
                    <td>
                        <label for="Fri">Fri</label>
                    </td>
                    <td>
                        <label for="Sat">Sat</label>
                    </td>
                    <td>
                        <label for="Sun">Sun</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Mon" id="Mon">
                    </td>
                    <td>
                        <input type="checkbox" name="Tue" id="Tue">
                    </td>
                    <td>
                        <input type="checkbox" name="Wed" id="Wed">
                    </td>
                    <td>
                        <input type="checkbox" name="Thr" id="Thr">
                    </td>
                    <td>
                        <input type="checkbox" name="Fri" id="Fri">
                    </td>
                    <td>
                        <input type="checkbox" name="Sat" id="Sat">
                    </td>
                    <td>
                        <input type="checkbox" name="Sun" id="Sun">
                    </td>
            </table>
            <hr>
            <table id="Time-input">
                <td><label for="Start">Start Time</label></td>
                <tr>
                    <td>
                        <input class="hour_textbox" type="text" maxlength="2" placeholder="12">
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="Min_textbox" type="text" maxlength="2" placeholder="00">
                    </td>
                </tr>
                <td><label for="End">End Time</label></td>
                <tr>
                    <td>
                        <input class="hour_textbox" type="text" maxlength="2" placeholder="12">
                    </td>
                    <td>
                            <label>:</label>
                        </td>
                    <td>
                        <input class="Min_textbox" type="text" maxlength="2" placeholder="00">
                    </td>
                </tr>
            </table>
            <hr>
            <table id="Instructor">
                <td>
                    <label for="Type">Type:</label>
                </td>
                <tr>
                    <td>
                        <input type="text" placeholder="Type">
                    </td>
                </tr>
                <td>
                    <label for="Type">Instructor:</label>
                </td>
                <tr>
                    <td>
                        <input type="text" placeholder="Instructor">
                    </td>
                </tr>
                <td>
                    <label for="Type">Location:</label>
                    ` <tr>
                        <td>
                            <input type="text" placeholder="Location">
                        </td>
                    </tr>
            </table>
        </form>
        <input type="button" value="Submit">
        </div>
</body>

</html>