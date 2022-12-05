<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $administrador = $_SESSION['admin'];
    $email = $_SESSION['email'];


    ?>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">

                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media mr-4">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                    <div class="reg">
                        <p class="mb-0"><a href="registro.php" class="mr-2">Registro</a> <a href="login.php">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Chop's <span>Beer</span></a>

            <div class="order-lg-last btn-group">
                <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-shopping-bag"></span>
                    <div class="d-flex justify-content-center align-items-center"><small>3</small></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item d-flex align-items-start" href="#">
                        <div class="img" style="background-image: url(images/prod-1.jpg);"></div>
                        <div class="text pl-3">
                            <h4>Bacardi 151</h4>
                            <p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex align-items-start" href="#">
                        <div class="img" style="background-image: url(images/prod-2.jpg);"></div>
                        <div class="text pl-3">
                            <h4>Jim Beam Kentucky Straight</h4>
                            <p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex align-items-start" href="#">
                        <div class="img" style="background-image: url(images/prod-3.jpg);"></div>
                        <div class="text pl-3">
                            <h4>Citadelle</h4>
                            <p class="mb-0"><a href="#" class="price">$22.50</a><span class="quantity ml-3">Quantity: 01</span></p>
                        </div>
                    </div>
                    <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
                        View All
                        <span class="ion-ios-arrow-round-forward"></span>
                    </a>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="product.html">Ver Produtos</a>
                            <a class="dropdown-item" href="cart.html">Sacola</a>
                            <a class="dropdown-item" href="checkout.html">Login</a>
                        </div>

                        <?php
                        if ($administrador == "true") {
                            echo  "<li class='nav-item dropdown active'>
                            <a class='nav-link dropdown-toggle'  id='dropdown04' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Administrador</a>
                            <div class='dropdown-menu' aria-labelledby='dropdown04'>
                                <button data-target='#exampleModalCenter' data-toggle='modal'data-toggle='modal' class='dropdown-item' >Adicionar</button>
                                
                                </div>";
                        }
                        ?>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">

                    <h2 class="mb-0 bread">Produtos</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row mb-4">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                            <h4 class="product-select">Produtos</h4>
                            <select class="selectpicker" multiple>
                                <option>Barril</option>
                                <option>Máquina</option>
                                <option>Chope</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/fotoBarril_correto.jfif);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="sale">Sale</span>
                                    <span class="category">Brandy</span>
                                    <h2>Barril Heineken</h2>
                                    <p class="mb-0"><span class="price price-sale">$69.00</span> <span class="price">$49.00</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-2.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="seller">Best Seller</span>
                                    <span class="category">Gin</span>
                                    <h2>Jim Beam Kentucky Straight</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-3.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="new">New Arrival</span>
                                    <span class="category">Rum</span>
                                    <h2>Citadelle</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-4.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Rum</span>
                                    <h2>The Glenlivet</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-5.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Whiskey</span>
                                    <h2>Black Label</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-6.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Tequila</span>
                                    <h2>Macallan</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-7.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Vodka</span>
                                    <h2>Old Monk</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-8.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Whiskey</span>
                                    <h2>Jameson Irish Whiskey</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-9.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Whiskey</span>
                                    <h2>Screwball</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-10.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Whiskey</span>
                                    <h2>Screwball</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-11.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Whiskey</span>
                                    <h2>McClelland's</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="product ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-12.jpg);">
                                    <div class="desc">
                                        <p class="meta-prod d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text text-center">
                                    <span class="category">Whiskey</span>
                                    <h2>Plantation</h2>
                                    <span class="price">$69.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/fotoBarril_correto.jfif);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="sale">Sale</span>
                                <span class="category">Brandy</span>
                                <h2>Barril Heineken</h2>
                                <p class="mb-0"><span class="price price-sale">$69.00</span> <span class="price">$49.00</span></p>
                            </div>
                        </div>
                    </div>


                    <?php
                    //  echo $produtoAparecer;



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
                    $nome = $_POST["nomeProd"]; //
                    $quantidadeEstoque = $_POST["quantidadeEstoque"]; //
                    $valorReferencia = $_POST["valorReferencia"]; //
                    $marca = $_POST["marca"]; //
                    $validade = $_POST["dataValidade"]; //
                    $volumeLitros = $_POST["volumeLitros"]; //
                    $categoria = $_POST["categoria"]; //
                    $descricao = $_POST["descricao"]; //



                    $categoriaa = "INSERT INTO mydb.categoria(nome, descricao) VALUES ('$categoria', '$descricao')";

                    if ($conn->query($categoriaa) === TRUE) {
                        $last_id = $conn->insert_id;
                        $produto = "INSERT INTO mydb.produto(valorReferencia, nome, quantidadeEstoque
        , marca, validade, volumeLitros ,categoria_id) VALUES ('$valorReferencia', '$nome', '$quantidadeEstoque', 
        '$marca','$validade', '$volumeLitros', '$last_id')";

                        if ($conn->query($produto) == TRUE) {

                            echo " <div class='col-md-4 d-flex'>
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
                      <h2>" . $nome . "</h2>
                      <p class='mb-0'> <span class='price'>$" . $valorReferencia . ".00</span></p>
                  </div>
              </div>
          </div>";
                            $_SESSION['preco'] = $valorReferencia;
                            $_SESSION['nomeProduto'] = $nome;
                        }
                    } else {
                        echo "Error: " . $conn->error;
                    }




                    $conn->close();



                    ?>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Tipos de produtos</h3>
                            <ul class="p-0">
                                <li><a href="#">Barril <span class="fa fa-chevron-right"></span></a></li>
                                <li><a href="#">Máquina <span class="fa fa-chevron-right"></span></a></li>
                                <li><a href="#">Chope <span class="fa fa-chevron-right"></span></a></li>
                            </ul>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>

    <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Chop's <span>Beer</span></a></h2>
                        <p>Não há nada melhor que uma boa bebida!</p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Minha conta</h2>
                        <ul class="list-unstyled">
                            <li><a href="profile.php"><span class="fa fa-chevron-right mr-2"></span>Minha conta</a></li>
                            <li><a href="registro.php"><span class="fa fa-chevron-right mr-2"></span>Registrar</a></li>
                            <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>Login</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Dúvidas?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">Instituto Federal de Minas Gerais - Campus Formiga</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="mb-0" style="color: rgba(255,255,255,.5);">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>

                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="js/main.js"></script>

    <script src="jss/jquery-3.3.1.min.js"></script>
    <script src="jss/popperr.min.js"></script>
    <script src="jss/bootstrapp.min.js"></script>
    <script src="jss/mainn.js"></script>

    <?php
    //Adicionado produtos
    echo ("<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
      <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
        <div class='modal-content rounded-0'>
          <div class='modal-body py-0'>

            
            <div class='d-flex main-content'>
              <div class='bg-image promo-img mr-3' style='background-image: url('imagess/img_1.jpg');'>
              </div>
              <div class='content-text p-4'>
                <h3>Adicionar produto</h3>
                

                <form method='post'>
                  <div class='form-group'>
                    <label for='fname'>Nome do produto</label>
                    <input type='text' name='nomeProd' id='nomeProd' class='form-control'  placeholder='Digite o nome'>
                     
                  
                  </div>
                  <div class='form-group'>
                    <label for='fname'>Descrição do produto</label>
                    <input type='text' name='descricao' id='descricao' class='form-control'  placeholder='Insira a descrição'>
                  </div>

                  <div class='form-group'>
                    <label for='fname'>Categoria do produto</label>
                    <input type='text' name='categoria' id='categoria' class='form-control'  placeholder='Insira a descrição'>
                  </div>
                  <div class='form-group'>
                    <label for='name'>Quantidade em estoque</label>
                    <input type='number' name='quantidadeEstoque' id='quantidadeEstoque' class='form-control'  placeholder='Insira a Quantidade'>
                  </div>
                  
                  <div class='form-group row mb-4'>
                      <div class='col-12'>
                        <label for='mm'>Data de validade</label>
                        <input type='text' name='dataValidade' id='dataValidade' class='form-control'  placeholder='Insira a Quantidade'>
                      </div>
                      
                  </div>

                  <div class='form-group'>
                  <label for='name'>Volume em litros</label>
                  <input type='text' name='volumeLitros' id='volumeLitros' class='form-control'  placeholder='Insira o volume'>
                 </div>

                 <div class='form-group'>
                 <label for='name'>Marca</label>
                 <input type='text' id='marca' name='marca' class='form-control'  placeholder='Insira a marca'>
                  </div>

                  <div class='form-group'>
                  <label for='name'>Valor Referencia</label>
                  <input type='text' id='valorReferencia' name='valorReferencia' class='form-control'  placeholder='Insira a marca'>
                 </div>

                   <div class='form-group'>
                    <input type='submit' value='Finalizar' class='btn btn-primary btn-block'>
                    </div>
                    <div class='form-group '>
                    <p class='custom-note'><small>By signing up you will agree to our <a href='#'>Privacy Policy</a></small></p>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>");


    ?>

    

    <?php
    //Removendo produtos
    echo ("<div class='modal fade' id='ModalRemove' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
<div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
  <div class='modal-content rounded-0'>
    <div class='modal-body py-0'>

      
      <div class='d-flex main-content'>
        <div class='bg-image promo-img mr-3' style='background-image: url('imagess/img_1.jpg');'>
        </div>
        <div class='content-text p-4'>
          <h3>Adicionar produto</h3>
          
          <div class='form-group'>
          <label for='name'>Categoria do produto</label>
          <input type='text' class='form-control' id='email' placeholder='Insira a categoria'>
        </div>

          <form action='#'>
            <div class='form-group'>
              <label for='fname'>Nome do produto</label>
              <input type='text' class='form-control' id='fname' placeholder='Digite o nome'>
               
              </form>
            </div>
            <div class='form-group'>
              <label for='fname'>Descrição do produto</label>
              <input type='text' class='form-control' id='fname' placeholder='Insira a descrição'>
            </div>
            <div class='form-group'>
              <label for='name'>Quantidade em estoque</label>
              <input type='number' class='form-control' id='email' placeholder='Insira a Quantidade'>
            </div>
            
            <div class='form-group row mb-4'>
                <div class='col-12'>
                  <label for='mm'>Data de validade</label>
                </div>
                <div class='col-md-4'>
                  <input type='text' class='form-control' id='mm' placeholder='MM'>
                </div>
                <div class='col-md-4'>
                  <input type='text' class='form-control' id='dd' placeholder='DD'>
                </div>
                <div class='col-md-4'>
                  <input type='text' class='form-control' id='yyyy' placeholder='YYYY'>
                </div>
            </div>

            <div class='form-group'>
            <label for='name'>Volume em litros</label>
            <input type='text' class='form-control' id='email' placeholder='Insira o volume'>
          </div>

          <div class='form-group'>
          <label for='name'>Marca</label>
          <input type='text' class='form-control' id='email' placeholder='Insira a marca'>
        </div>

            <div class='form-group'>
              <input type='submit' value='Finalizar' class='btn btn-primary btn-block'>
            </div>
            <div class='form-group '>
              <p class='custom-note'><small>By signing up you will agree to our <a href='#'>Privacy Policy</a></small></p>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
</div>");



    ?>

</body>

</html>