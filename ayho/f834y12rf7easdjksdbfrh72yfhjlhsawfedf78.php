<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                justify-content: center;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                background-color: #23c8fa;
            }
            input{
                width:25%;
                height:30px;
                color:black;
                font-size: 15px;
                text-align: center;
                border:3px solid black;
                border-radius: 30px;
                background-color: #8ce4ff;
            }
            #submit-button{
                background:#007ba1;
            }
            ::placeholder{
                color:black;
            }
        </style>
    </head>

    <body>
        <h1>Submit Event</h1><br>
        <h2>All four fields must be filled out. The date also has to be set in the future. The system will automatically delete events that are set to be in the past.<h2>
        <div style="">
            <form action="event_submit.php" method="post">
                <input type="text" autocomplete="off" name="event-name" placeholder="Event Name"/><br><br>
                <input type="text" autocomplete="off" name="description" placeholder="Event description"/><br><br>
                <input type="time" autocomplete="off" name="time" placeholder="Time"/><br><br>
                <input type="date" name="date" autocomplete="off" placeholder="Date"/><br><br>
                <input id="submit-button" type="submit">
        </div>
    </body>
</html>