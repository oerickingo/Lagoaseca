<?php

$servername = "localhost";
$username = "u446731902_imigrantes";
$password = "aDAp8x3w7;Q";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name='';
$email='';
$senha='';
$name = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
if($name!='' || $senha!='' ||$email!=''){
    $sql = "INSERT INTO u446731902_imigrantes.imigrantes (nome,senha,email)
    VALUES ('$name','$senha','$email')";

    if ($conn->query($sql) === TRUE) {
    echo "nome adicionado<br>";
    echo "<a href='http://imigrantes.quizall.com.br/index.html'>click aqui para voltar</>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    echo "adicione um nome";

}



?>