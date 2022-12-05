<?php
require('login.php');

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//Variaveis Login
$email = $_POST["email"];
$senha = $_POST["senha"];

if($email=="admin@gmail.com" && $senha=="admin"){
    $administrador=true;
    $_SESSION['admin'] = $administrador;
    echo "<meta http-equiv=\"refresh\" content=\"1; URL='index.php'\"/>";
}else{

$verUsuario = mysqli_query($conn, "SELECT * FROM cliente WHERE cliente.email = '$email' AND cliente.senha = '$senha' limit 1");

//<meta http-equiv=\"refresh\" content=\"1; URL='index.php'\"/>

if ((mysqli_num_rows($verUsuario)==1)) {
    
    $administrador=false;
    $_SESSION['admin'] = $administrador;
    $_SESSION['email'] = $email;
    echo "<meta http-equiv=\"refresh\" content=\"1; URL='index.php'\"/>";
} else {
   
}
}
$conn->close();
?>