<?php
// connection to db settings
require('config.php');

$sql = "SELECT * FROM students";
$result = mysqli_query($connect, $sql);


while($row = mysqli_fetch_array($result)){
  $data[] = $row;
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);
?>
