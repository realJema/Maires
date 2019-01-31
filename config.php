<?php
// / connection to database and query
$connect = mysqli_connect("localhost","root","","ubstud");
// check connection
if(!$connect){
    die("Connection failed: " . $connect->connect_error);
}

?>
