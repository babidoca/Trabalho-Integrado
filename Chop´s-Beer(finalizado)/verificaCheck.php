<?php
session_start();
$precoProduto=$_SESSION['preco'];
$idProduto=$_SESSION['id'];
$teste = $_SESSION['email'];

?>

<?php
	$quantidade = $_POST["quantidade"];
	$_SESSION['quantidade'] = $quantidade;


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

$id="SELECT pessoa.id FROM pessoa JOIN cliente WHERE pessoa.id=cliente.pessoa_id AND cliente.email = '$teste'";
$resultado=mysqli_query($conn,$id);

if (mysqli_num_rows($resultado) > 0) {
                                                    
    while($row = mysqli_fetch_assoc($resultado)) {
      $idd=($row['id']);
      $_SESSION['clienteId'] = $idd;
    }
  }
  
//Variaveis Login
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade= $_POST["cidade"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];



$endereco = "INSERT INTO mydb.endereco(rua, bairro,numero,complemento,cidade,pessoa_id) VALUES ('$rua', '$bairro','$cidade','$numero','$complemento','$idCliente')";

if ($conn->query($endereco) === TRUE) {
		echo  "deu certo endereco";	
	}
 else {
	echo "Error: " . $conn->error;
}

	?>