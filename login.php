php
<?php
$username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
$conn = new mysqli('localhost', 'root','', 'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$stmt = $conn->prepare("INSERT INTO users (username, email, password) 
VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username, $email, $password);

  // Execute the SQL statement
  $stmt->execute();

  echo "registration successfully";
  $stmt->close();
  $conn->close();
 
}
 ?>
