<?php
$servername = "setapproject.org";
$username = "csc412";
$password = "csc412";
$dbname = "csc412";



// Create connection
$con=mysqli_connect('setapproject.org','csc412','csc412','csc412');


// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tablename");

while($row = mysqli_fetch_array($result)) {
  echo $row['name'] . " " . $row['age']. " ". $row['id'];
  echo "<br>";
}

mysqli_close($con);
?>
