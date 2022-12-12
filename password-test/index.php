
<html>  
<head>  
    <title>PHP login system</title>  
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
        <center><h1>Upcoming Events</h1>
        <h1 name="event-container">
            <?php
            include('connection.php');
                $sql = 'SELECT * FROM events';
                $query = mysqli_query($con, $sql);
                while ($row = $query->fetch_assoc()) {
                    $new = date_format(date_create_from_format('Y-m-d', $row['date']), 'F d, Y');
                    $newtime = date_format(date_create_from_format('g:i:s.u', $row['time']), 'g:i a');
                    if(isset($row['name']) && isset($row['description']) && isset($row['date'])){
                        echo $row['name']."<br>".$row['description']."<br>".$new."<br>".$newtime."<br>";
                    }
                    
                }
            ?>
        </h1>
        </center>
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  