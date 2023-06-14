<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "reg";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  name, email, password, confirmpassword FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        $password = $row["password"];
        $confirmpassword = $row["confirmpassword"];
        echo "name: " . $name . "<br>";
        echo "email: " . $email . "<br>";
        echo "password: " . $password . "<br>";
        echo "confirmpassword: " . $confirmpassword . "<br>";
    }
} else {
    echo "No data found.";
}
$conn->close();
?>







