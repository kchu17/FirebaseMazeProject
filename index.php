<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.2.1/firebase-app.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.2.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


<script>
var DBNAME = 'game';
var GAMENAME = 'maze1571608800';
</script>
<script src = "maze.js"></script>
<script src = "app.js"></script>

<body>
    <style>
    body 
    {
        padding: 8px;
        font-family: Helvetica;
    }
    
    .player
    {
        border: 1px #000 solid;
        border-radius: 100px;
        position: absolute;
    }

    #buttons
    {
        touch-action: manipulation;
        padding: 16px;
    }

    .button
    {
        width: 60px;
        height: 60px;
    }
    </style>

    <title>Kevin Chu's Multiplayer Mazegame Project</title>
    <B>Kevin Chu's Multiplayer Mazegame Project</B><BR>
    Use arrow-keys on keyboard to move your cursor.
    <BR><BR>

    <div style='position:absolute' id = players></div>
    <table>
        <TR>
            <TD>
                <canvas id = "canvas" style = "border:1px solid #000000;"></canvas>
                <div id = buttons>
                    <center>
                        <table>
                            <TR>
                                <TD></td>
                                <TD>
                                    <center><input type = button class = button value = "Up" onclick = "goUp()"></center>
                                </td>
                                <TD>
                                </td>
                            </tr>
                            <TR>
                                <TD>
                                    <input type = button class = button value = "Left" onclick = "goLeft()"></td>
                                <TD>
                                    <input type = button class = button value = "Down" onclick = "goDown()"></td>
                                <TD>
                                <input type = button class = button value = "Right" onclick = "goRight()"></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </td>
        </tr>
    </table>



