<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poetryapp";

// Create connection
$conn = mysqli_connect("localhost","root","","poetryapp");


$id = $_POST["id"];
$sql = "DELETE FROM `poetry` WHERE ID = '$id'";
$result = mysqli_query($conn,$sql);

if($result){
    echo "deleted successfully";
}

?>