<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poetryapp";

// Create connection
$conn = mysqli_connect("localhost","root","","poetryapp");


$poetryname = $_POST["poetryname"]??"No data added";
$poetrydata = $_POST["poetrydata"]??"No data added";

$sql = "INSERT INTO `poetry`(`poetry_data`, `poetry_name`) VALUES ('$poetryname','$poetrydata')";
$result = mysqli_query($conn,$sql);

if ($result) {
  $response = array("status"=>"1","message"=>"poetry success inserted");
} else {
    $response = array("status"=>"0","message"=>"poetry not inserted");
}

json_encode($response);
?>