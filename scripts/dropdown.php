<?php

// This is to change the dropdown every time someone clicks on the map
$region_id = $_POST['region_id'];
// connection to database settings
require('config.php');

mysqli_query($connect,"SET CHARACTER SET 'utf8'");

$query = "SELECT DISTINCT D_partements FROM maires WHERE Region = '$region_id'";

$exec_query = mysqli_query($connect, $query);

$output = '<option value="All">Selectioner Tout</option>';

while ($row = mysqli_fetch_array($exec_query)){
	 $output .= "<option>" . $row['D_partements'] . "</option>";
}

echo $output; 
?>

