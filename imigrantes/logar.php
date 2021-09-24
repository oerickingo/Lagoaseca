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
$email='';
$senha='';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if( $senha!='' ||$email!=''){
    $sql = "SELECT * FROM u446731902_imigrantes.imigrantes where email='$email' and senha='$senha'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION["email"]=$email;
            $_SESSION["nome"]=$row["nome"];
            $_SESSION["id"]=$row["id"];
            $_SESSION["senha"]=$senha;
            header('Location: http://imigrantes.quizall.com.br/imigrantes.html');
        }
      } else {
        echo "email ou senha errados<br>";
        echo "<a href='http://imigrantes.quizall.com.br/index.html'>click aqui para voltar</>";
      }
   
}else{
    echo "adicione um email e senha<br>";
    echo "<a href='http://imigrantes.quizall.com.br/index.html'>click aqui para voltar</>";
}



?>