<?php
require('profile.php');


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



//Variaveis atualizacao
$nomee = $_POST["nomee"];
$sobrenomee = $_POST["sobrenomee"];
$emaill = $_POST["emaill"];
$senhaa = $_POST["senhaa"];
$dataNascimentoo = $_POST["dataNascimentoo"];
$cpff = $_POST["cpff"];

$id="SELECT pessoa.id FROM pessoa JOIN cliente WHERE pessoa.id=cliente.pessoa_id AND cliente.email = '$teste'";
$resultado=mysqli_query($conn,$id);

if (mysqli_num_rows($resultado) > 0) {
                                                    
    while($row = mysqli_fetch_assoc($resultado)) {
      $idd=($row['id']);
    
    }
  }

$pessoa = "UPDATE mydb.pessoa SET nome='$nomee', sobrenome='$sobrenomee'  WHERE pessoa.id='$idd'";

if ($conn->query($pessoa) === TRUE) {

            $cliente = "UPDATE mydb.cliente SET email='$emaill', senha='$senhaa', cpf='$cpff', pessoa_id='$idd' WHERE cliente.pessoa_id='$idd'";

            if ($conn->query($cliente) == TRUE) {
                $_SESSION['email'] = $emaill;
                echo "<meta http-equiv=\"refresh\" content=\"0; URL='profile.php'\"/>";
            }
        
    }
 else {
    echo "Error: " . $pessoa . "<br>" . $conn->error;
}




?>