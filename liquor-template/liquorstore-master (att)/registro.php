<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>

  <!-- Section: Design Block -->
  
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }

      body {

        background-image: url("images/bg_2.jpg");
      }

      #centro {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-content: normal;
        justify-content: normal;
        align-items: center;
      }

      #registrobtn {
        background-color: #a23f25;
        color: rgba(255, 255, 255, 0.8);
      }

      #titulo {
        font-family: "Spectral", serif;
        font-weight: 700;
        font-size: 30px;
        color: rgba(255, 255, 255, 0.8);
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: normal;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
      }


      #beer {
        color: #343a40;
      }

      .card-body {
        margin-top: -20px;
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center" id="centro">
        <div class="col-lg-6 mb-5 mb-lg-0">

          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <a class="navbar-brand" href="index.php" id="titulo">CHOP'S <span id="beer">BEER</span></a>
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Registre-se</h2>
              <form action="" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="nome" class="form-control" name="nome" />
                      <label class="form-label" for="form3Example1" >Nome</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="sobrenome" class="form-control" name="sobrenome" />
                      <label class="form-label" for="form3Example2" >Sobrenome</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control" name="email" />
                  <label class="form-label" for="form3Example3">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="senha" class="form-control" name="senha" />
                  <label class="form-label" for="form3Example4">Senha</label>
                </div>

                <!-- Data nascimento input -->
                <div class="form-outline mb-4">
                  <input type="text" id="dataNascimento" class="form-control" name="dataNascimento"/>
                  <label class="form-label" for="form3Example4">Data nascimento</label>
                </div>

                <!-- CPF input -->
                <div class="form-outline mb-4">
                  <input type="text" id="cpf" class="form-control" name="cpf"
                    pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})" />
                  <label class="form-label" for="form3Example4">CPF</label>
                </div>




                <!-- Submit button -->
                <button type="submit" class="btn btn-block mb-4" id="registrobtn">
                  Registrar
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>Já tem uma conta? <a href="login.php">Entre!</a></p>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

  
<?php

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
echo "Connected successfully";


//Variaveis registro
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$dataNascimento = $_POST["dataNascimento"];
$cpf = $_POST["cpf"];



//Verifica 
$verifica = mysqli_query($conn, "SELECT * FROM cliente WHERE cliente.email = '$email' limit 1");


if (mysqli_num_rows($verifica) > 0) {

    echo "ja existe alguém com esse email!";
} else {

    $pessoa = "INSERT INTO mydb.pessoa(nome, sobrenome, dataNascimento) VALUES ('$nome', '$sobrenome', NULL)";

    if ($conn->query($pessoa) === TRUE) {
        $last_id = $conn->insert_id;
        $endereco = "INSERT INTO mydb.endereco(rua, numero, bairro, complemento, pessoa_id) VALUES (NULL, NULL, NULL, NULL, '$last_id')";

            if ($conn->query($endereco) == TRUE) {
                $cliente = "INSERT INTO mydb.cliente(email,senha,cpf, pessoa_id) VALUES ('$email','$senha','$cpf', '$last_id')";

                if ($conn->query($cliente) == TRUE) {
                    echo "CABO";
                }
            }
        }
     else {
        echo "Error: " . $pessoa . "<br>" . $conn->error;
    }







    echo  "<br>" .  "<br>" . "Não existe";
}

$conn->close();

  ?>
</body>

</html>