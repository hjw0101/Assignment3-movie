<?php
// Get the form data
$romance = $_POST['romance'];
$horror = $_POST['horror'];
$comedy = $_POST['comedy'];
$action = $_POST['action'];
$fantasy = $_POST['fantasy'];

// Connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'movie');

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// Insert data into the 'genre' table
$sql = "INSERT INTO genre (romance, horror, comedy, action, fantasy)
        VALUES ($romance, $horror, $comedy, $action, $fantasy)";
if ($mysqli->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
