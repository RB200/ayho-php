<?php
include('connection.php');  

$_NAME = $_POST['event-name'];
$_DESC = $_POST['description'];
$_TIME = $_POST['time'];
$_DATE = $_POST['date'];


$sql = "INSERT INTO events (name,description,time,date) VALUES ('$_NAME','$_DESC','$_TIME','$_DATE');";

$r = mysqli_query($con,$sql);

if($r){
    header('Location: index.php');
}
else{
    echo mysqli_error($con);
}

?>

