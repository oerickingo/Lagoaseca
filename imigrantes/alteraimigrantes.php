<?php
session_start();
$servername = "localhost";
$username = "u446731902_imigrantes";
$password = "aDAp8x3w7;Q";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email='';
$senha='';
$nome='';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
if($name!='' || $senha!='' ||$email!=''){
$sql = "UPDATE u446731902_imigrantes.imigrantes SET nome='$nome', email='$email', senha='$senha' WHERE id=".$_SESSION["id"].";";

if ($conn->query($sql) === TRUE) {
    $_SESSION["email"]=$email;
    $_SESSION["nome"]=$nome;
    $_SESSION["senha"]=$senha;
    header('Location: http://imigrantes.quizall.com.br/imigrantes.html');
} else {
  echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>