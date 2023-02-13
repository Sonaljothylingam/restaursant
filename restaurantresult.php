<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from resturant where Your_name='$_POST[Your_name]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
{
    echo "Your_name: " . $row["Your_name"]."<br>". " - Food_Id: " . $row["Food_Id"]. "<br>". "- Food_name: " . $row["Food_name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

