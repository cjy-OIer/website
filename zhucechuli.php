<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
<meta charset="UTF-8">
<body>



?php
$servername = "sql105.phpnet.us";
$username = "pn_31432773";
$password = "cjy100211";
$dbname = "pn_31432773_yonghu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (name,mima)
VALUES ('John', 'Doe')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


</body>

</html>

