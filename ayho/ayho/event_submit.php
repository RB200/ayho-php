<?php
include('connection.php');  

$_NAME = $_POST['event-name'];
$_DESC = $_POST['description'];
$_TIME = $_POST['time'];
$_DATE = $_POST['date'];

if(isset($_NAME) && isset($_DESC) && isset($_TIME) && isset($_DATE)){
    if($_NAME !== '' && $_DESC !== '' && $_TIME !== '' && $_DATE !== ''){
        $sql = "INSERT INTO events (name,description,time,date) VALUES ('$_NAME','$_DESC','$_TIME','$_DATE');";
        $r = mysqli_query($con,$sql);
        $sql = "DELETE FROM `events` WHERE DATE < SYSDATE();";
        $s = mysqli_query($con, $sql);
        if($r && $s){
            header('Location: index.php');
        }
        else{
            echo mysqli_error($con);
        }
    }
    else{
        header('location:index.php');
    }
    
}



?>

