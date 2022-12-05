<?php
/*
session_start();
$precoProduto=$_SESSION['preco'];
$idProduto=$_SESSION['id'];
$quantidade=$_SESSION['quantidade'];
$idCliente=$_SESSION['clienteId'];

require('checkout.php');

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

function calculaValor(){
    $valorTotalReserva=$precoProduto*$quantidade;
    return $valorTotalReserva;
}

//Variaveis reserva
$agora = new DateTime(); // Pega o momento atual
$dataReservaInicio = $agora->format('m/d/Y');
$dataReservaFim = "12/31/2022";
$valorTotal=calculaValor();
$hora=$agora->format( 'H:i');
$descricao="teste";



    $reservaTotal = "INSERT INTO mydb.reserva(dataReservaInicio, dataReservaFim,valorTotal,hora,descricao,cliente_id) VALUES ('$dataReservaInicio', '$dataReservaFim','$valorTotal','$hora',$'$descricao','$idCliente')";

    if ($conn->query($reservaTotal) === TRUE) {
        $last_id = $conn->insert_id;
        $item_reserva = "INSERT INTO mydb.item_reserva(precoPraticadoUnitario, quantidade, descricao,reserva_id,cliente_id)
        VALUES ('$precoProduto','$quantidade','$descricao','$last_id','$idCliente')";

            if ($conn->query($produto) == TRUE) {
              echo"deu certo";
            }
        }
     else {
        echo "Error: " . $conn->error;
    }




$conn->close();
*/
  ?>