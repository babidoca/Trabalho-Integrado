
<?php/*
require_once('index.php');

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



//Variaveis produto
$nome = $_POST["nomeProd"];//
$quantidadeEstoque = $_POST["quantidadeEstoque"];//
$valorReferencia = $_POST["valorReferencia"];//
$marca = $_POST["marca"];//
$validade = $_POST["dataValidade"];//
$volumeLitros = $_POST["volumeLitros"];//
$categoria = $_POST["categoria"];//
$descricao = $_POST["descricao"];//



    $categoriaa = "INSERT INTO mydb.categoria(nome, descricao) VALUES ('$categoria', '$descricao')";

    if ($conn->query($categoriaa) === TRUE) {
        $last_id = $conn->insert_id;
        $produto = "INSERT INTO mydb.produto(valorReferencia, nome, quantidadeEstoque
        , marca, validade, volumeLitros ,categoria_id) VALUES ('$valorReferencia', '$nome', '$quantidadeEstoque', 
        '$marca', NULL, '$volumeLitros', '$last_id')";

            if ($conn->query($produto) == TRUE) {
              $produtoAparecer=" <div class='col-md-4 d-flex'>
              <div class='product ftco-animate'>
                  <div class='img d-flex align-items-center justify-content-center' style='background-image: url(images/fotoBarril_correto.jfif);'>
                      <div class='desc'>
                          <p class='meta-prod d-flex'>
                              <a href='checkout.php' class='d-flex align-items-center justify-content-center'><span class='flaticon-shopping-bag'></span></a>
                              <a href='checkout.php' class='d-flex align-items-center justify-content-center'><span class='flaticon-heart'></span></a>
                              <a href='checkout.php' class='d-flex align-items-center justify-content-center'><span class='flaticon-visibility'></span></a>
                          </p>
                      </div>
                  </div>
                  <div class='text text-center'>
                      <span class='sale'>Sale</span>
                      <span class='category'>Brandy</span>
                      <h2>".$nome."</h2>
                      <p class='mb-0'> <span class='price'>$".$valorReferencia.".00</span></p>
                  </div>
              </div>
          </div>";
          $_SESSION['produtoo'] = $produtoAparecer;
          
        
            }
        }
     else {
        echo "Error: " . $conn->error;
    }




$conn->close();
*/
  ?>