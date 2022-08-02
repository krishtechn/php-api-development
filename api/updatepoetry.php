<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poetryapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$poetryname = $_POST["poetryname"]??"";
$poetrydata = $_POST["poetrydata"]??"";
$id = $_POST["id"];

$sql = "UPDATE poetry SET poetry_name='$poetryname' WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
  $response = array("status"=>"1","message"=>"poetry update success");
  echo "update success";
} else {
  $response = array("status"=>"1","message"=>"failed to update poetry");
  echo "can't update";
}

json_encode($response);

?>
