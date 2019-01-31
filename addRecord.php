<?php

// variables
$record = $_POST['record_data'];
$First_name = $record[0];
$Last_Name = $record[1];
$Matricule = $record[2];
$Gender = $record[3];
$Level = $record[4];
$CA_Result = $record[5];
$Exam_Result = $record[6];

// connection to database settings
require('config.php');

$query = "INSERT INTO `students`(`first_name`, `last_name`, `matricule`, `gender`, `level`, `ca_result`, `exam_result`) VALUES ('$First_name', '$Last_Name', '$Matricule', '$Gender', '$Level', '$CA_Result', '$Exam_Result')";

$exec_query = mysqli_query($connect, $query);
if(!$exec_query){
    echo mysqli_error($connect); // returns error in case query failed
} else {
    echo 'successful';
}

mysqli_close($connect);
?>
