<?php
echo "<body>";
if( isset($_POST['username']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['locality']) && isset($_POST['mail_id'])){
$name = $_POST['username'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$locality = $_POST['locality'];
$mailid = $_POST['mail_id'];

echo "<center><h2>Your Details : </h2>".
    "<h3>Name : $name <br> Age : $age <br> Gender : $gender <br> Locality : $locality <br> Email : $mailid</h3>";
}else{
    echo "<h1>No Details Given !! Redundant moves</h1>";
}
echo "<a href='gym.php'>Go to Homepage</a></center>";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, age, gender,locality,mail_id)
VALUES ('$name', '$age', '$gender','$locality','$mailid')";

if ($conn->query($sql) === TRUE) {
  echo "<center><b style='color:green'>You are added to our database</b></center>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


echo "</body>";
?>