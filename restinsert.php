<html>
<body>

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

$sql = "INSERT INTO resturant (Your_name, Food_Id, Food_name)
VALUES ('$_POST[Your_name]', '$_POST[Food_Id]', '$_POST[Food_name]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<form action="restaurantresult.php" method="post">
Your_name: <input type="text" name="Your_name" />
<input type="submit" />
</form>
</body>
</html>