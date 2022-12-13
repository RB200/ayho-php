<?php
    include('connection.php');
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
    <title>Art Your Heart Out</title>
    <link rel="stylesheet" href="./styles.css">
  
</head>
<body>
    <a id="top"></a>
    <div class="side" style="float:left;height:200%; width:15%; background:#22610b;">
        <div style="padding:10%;" width="150px">
            <img src="https://via.placeholder.com/150?text=AYHO+LOGO+HERE" width="100%">
            
        </div>
        <div style="margin-left:7.5%; margin-bottom: 25%; width:85%;border-bottom:3px white solid"></div>

        <div class='pages'>
            <a href='#upcoming' style="text-decoration: none; color:white; text-align: center;">
                <div style="border-radius:5px; border-left:2px white solid; width:85%; border-right: 2px white solid; margin-left: 7.5%">
                    <h2>Upcoming Events</h2>
                </div>
            </a>
            <a href='#gallery-section' style="text-decoration: none; color:white; text-align: center;">
                <div style="border-radius:5px; border-left:2px white solid; width:85%; border-right: 2px white solid; margin-left: 7.5%">
                    <h2>Art Gallery</h2>
                </div>
            </a>

            <a href="#community-service" style="text-decoration: none; color:white; text-align:center;">
                <div style="border-radius:5px; border-left: 2px white solid; width: 85%; border-right: 2px white solid; margin-left: 7.5%">
                    <h2>Community Service</h2>
                </div>
            </a>
            <a href="#login" style="text-decoration: none; color:white; text-align:center;">
                <div style="border-radius:5px; border-left: 2px white solid; width: 85%; border-right: 2px white solid; margin-left: 7.5%">
                    <h2>Login</h2>
                </div>
            </a>
        </div>


    </div>
    <div class="page">
        
        <div class="center">
            
                
        </div>
    </div>
        <a href="https://www.instagram.com/oak_artyourheartout/">
                <img src='https://cdn-icons-png.flaticon.com/512/87/87390.png' width="50" height="50">
        
        
        </a>
        <div style="justify-content: center; align-items: center; display:flex; margin-top: 1.5%;">
            <div>
                <h1>
                    Upcoming Events
                </h1>
            </div>
        </div>   
        <div style="display:flex; flex-wrap: wrap; justify-content: space-evenly;">
            

            <ul style="list-style-type: none; text-align: left; margin:0; padding:0;">
                <li>
                    <div style="display:flex;">
                        <div style="display:block; width:fit-content;">
                        
                        <?php
                            $sql = 'SELECT * FROM events ORDER BY date';
                            $query = mysqli_query($con, $sql); 
                            while ($row = $query->fetch_assoc()) {
                                if(isset($row['name']) && isset($row['description']) && isset($row['date']) && isset($row['time'])){
                                    if($row['name'] == '' || $row['description'] == '' || $row['date'] == '' || $row['time'] == ''){
                                        $name = $row['name'];
                                        $description = $row['description'];
                                        $date = date_format(date_create_from_format('Y-m-d', $row['date']), 'F d, Y');
                                        $time = date_format(date_create_from_format('g:i:s.u', $row['time']), 'g:i a'); 
                                    }
                                    $name = $row['name'];
                                    $description = $row['description'];
                                    $date = date_format(date_create_from_format('Y-m-d', $row['date']), 'F d, Y');
                                    $time = date_format(date_create_from_format('g:i:s.u', $row['time']), 'g:i a');

                                echo "<span>" . $name ."</span>"."<br><br>";
                                }
                                
                            }
                        ?>
                        </div>
                        <div style="display:block; width:fit-content;">
                        <?php
                            $sql = 'SELECT * FROM events ORDER BY date';
                            $query = mysqli_query($con, $sql); 
                            while ($row = $query->fetch_assoc()) {
                                if(isset($row['name']) && isset($row['description']) && isset($row['date']) && isset($row['time'])){
                                    $name = $row['name'];
                                    $description = $row['description'];
                                    $date = date_format(date_create_from_format('Y-m-d', $row['date']), 'F d, Y');
                                    $time = date_format(date_create_from_format('g:i:s.u', $row['time']), 'g:i a');
                                    if($row['name'] !== '' || $row['description'] !== '' || $row['date'] !== '' || $row['time'] !== ''){
                                        $count = mysqli_num_rows($query);
                                        for ($x = $count; $x <= $count;$x++){
                                            echo "<span>&ensp;-&ensp;</span><br><br>";
                                        }
                                        }
                                    else{
                                        echo "";
                                    }
                                }
                                
                            }
                        ?>
                        
                            
                        </div>
                        <div style="display:block; width:fit-content;">
                        <?php
                            $sql = 'SELECT * FROM events ORDER BY date';
                            $query = mysqli_query($con, $sql); 
                            while ($row = $query->fetch_assoc()) {
                                if(isset($row['name']) && isset($row['description']) && isset($row['date']) && isset($row['time'])){
                                    $name = $row['name'];
                                    $description = $row['description'];
                                    $date = date_format(date_create_from_format('Y-m-d', $row['date']), 'F d, Y');
                                    $time = date_format(date_create_from_format('g:i:s.u', $row['time']), 'g:i a');

                                    echo "<span>". $date ."</span>"."<br><br>";
                                }  
                            }
                        ?>
                        </div>
                        <div style="display:block; width:fit-content;">
                        <?php
                            $sql = 'SELECT * FROM events ORDER BY date';
                            $query = mysqli_query($con, $sql); 
                        
                            $count = mysqli_num_rows($query);
                            if($count == 0){
                                echo '<h3>No events planned.</h3>';  
                            }
                            else{
                                while ($row = $query->fetch_assoc()) {
                                    if(isset($row['name']) && isset($row['description']) && isset($row['date']) && isset($row['time'])){
                                        $name = $row['name'];
                                        $description = $row['description'];
                                        $date = date_format(date_create_from_format('Y-m-d', $row['date']), 'F d, Y');
                                        $time = date_format(date_create_from_format('g:i:s.u', $row['time']), 'g:i a');
                                        if($row['name'] !== '' || $row['description'] !== '' || $row['date'] !== '' || $row['time'] !== ''){
                                            $count = mysqli_num_rows($query);
                                            for ($x = $count; $x <= $count;$x++){
                                                echo "<span>&ensp;@&ensp;</span><br><br>";
                                            }
                                        }

                                    }  
                            
                                }
                            }
                            
                        ?>
                            
                        </div>
                        <div style="display:block; width:fit-content;">
                        <?php
                            $sql = 'SELECT * FROM events ORDER BY date';
                            $query = mysqli_query($con, $sql); 
                            while ($row = $query->fetch_assoc()) {
                                if(isset($row['name']) && isset($row['description']) && isset($row['date']) && isset($row['time'])){
                                    $name = $row['name'];
                                    $description = $row['description'];
                                    $date = date_format(date_create_from_format('Y-m-d', $row['date']), 'F d, Y');
                                    $time = date_format(date_create_from_format('g:i:s.u', $row['time']), 'g:i a');

                                    echo "<span>" . $time ."</span>"."<br><br>";
                                }
                                
                            }
                        ?>
                        
                        </div>
                    </div>
                </li>
            </ul>
            
        </div>

        <div>

        </div>
        
        
        
        <div id="gallery-section" style="border-top:4px black solid; width: 70%; margin-left:22.5%">
            <h1 style="text-align:center;">Art Gallery</h1>
            <a href="#top" style="text-decoration: none; color:lightslategray; text-align: center;"> 
                <h4>Back to top</h4>
            </a>
            <div class="gallery-container" style="display:flex; justify-content: center; align-items: center; flex-direction: row; flex-wrap: wrap;">
                <div class="gallery" >
                    <div class="gallery-background">
                        <div class="previous">
                            <div class="back-button1 unselectable">
                                <span class="arrow left unselectable">&lt;</span>
                                <span class="unselectable">Back</span>
                            </div>
                        </div>
                        <div class="image">
                            <img class="display-image1 unselectable" src="https://via.placeholder.com/150?text=a" width='200' height="200"/>
                        </div> 
                        <div class="next">
                            <div class="next-button1 unselectable">
                                <span class="unselectable">Next</span>
                                <span class="arrow right unselectable">&gt;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery">
                    <div class="gallery-background">
                        <div class="previous">
                            <div class="back-button2 unselectable">
                                <span class="arrow left unselectable">&lt;</span>
                                <span class="unselectable">Back</span>
                            </div>
                        </div>
                        <div class="image">
                            <img class="display-image2 unselectable" src="https://via.placeholder.com/150?text=a" width='200' height="200"/>
                        </div> 
                        <div class="next">
                            <div class="next-button2 unselectable">
                                <span class="unselectable">Next</span>
                                <span class="arrow right unselectable">&gt;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery">
                    <div class="gallery-background">
                        <div class="previous">
                            <div class="back-button3 unselectable">
                                <span class="arrow left unselectable">&lt;</span>
                                <span class="unselectable">Back</span>
                            </div>
                        </div>
                        <div class="image">
                            <img class="display-image3 unselectable" src="https://via.placeholder.com/150?text=a" width='200' height="200"/>
                        </div> 
                        <div class="next">
                            <div class="next-button3 unselectable">
                                <span class="unselectable">Next</span>
                                <span class="arrow right unselectable">&gt;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
           
        <div id="community-service" style="border-top:4px black solid; width: 70%; margin-left:22.5%">
            <h1 style="text-align:center;"> Community Service Opportunities </h1>
            <a href="#top" style="text-decoration: none; color:lightslategray; text-align: center;"> 
                <h4>Back to top</h4> <br>
            </a>
            <div class="opportunities" style="justify-content: center; align-items: center; display:flex;">
                <ul style=" margin: 0; padding:0; border-bottom:1px black solid; width:fit-content">
                    <li style="list-style-type:none; text-align: center;"><h2>Opportunity: 3 hours available</h2></li>
                    <li style="list-style-type:none; padding-left: 42.5%;"><h4>Information:</h4></li>
                    
                </ul>
            </div> 
        </div>
        <div id="login">
            <div style="display:flex; justify-content: center; text-align: center; margin-top: 1.5%;">
                <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                    <h2>  
                        <label> Username: </label>  
                        <input type = "text" id ="user" name  = "user" />  
                    </h2>  
                    <h2>  
                        <label> Password: </label>  
                        <input type = "password" id ="pass" name  = "pass" />  
                    </h2>  
                    <h2>     
                        <input type =  "submit" id = "btn" value = "Login" />  
                    </h2>  
                </form>  
            </div>   
            
        </div>

    <script src="./script.js"></script>
</body>
</html>

