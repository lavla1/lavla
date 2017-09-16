<?php                    # yourwebsite.com/users/username/password will login a user.  For login pages.
$username = $users[1]
$password = $users[2]

$servername = $_SERVER["HTTP_HOST"];
$username = "root";
$password = "";
  
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

$usr = "SELECT * FROM accs WHERE username=$username";
$result = $conn->query($usr);
  
if (!$result->num_rows = 0) {
  echo "This account was not found."
} else {
  while($row = $result->fetch_assoc()) {
    if ($row["username"] == $username and $row["password"] == $password) {
      echo "Good";
    } else {
      echo "Account information invalid."
    }
  }
}
  
$conn->close();
?>
