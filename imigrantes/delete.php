<?php
session_start();
$servername = "localhost";
$username = "u446731902_imigrantes";
$password = "aDAp8x3w7;Q";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM u446731902_imigrantes.imigrantes WHERE id=".$_SESSION["id"];

if ($conn->query($sql) === TRUE) {
  echo "deletado<br>";
  echo "<a href='http://imigrantes.quizall.com.br/index.html'>click aqui para voltar</>";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>