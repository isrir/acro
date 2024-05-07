<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "acronym_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$acronym = $_POST['acronym'];

$sql = "SELECT abbreviation FROM acronyms WHERE acronym = '$acronym'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "The abbreviation for '" . $acronym . "' is: " . $row["abbreviation"];
} else {
    echo "No abbreviation found for the given acronym.";
}

$conn->close();
?>