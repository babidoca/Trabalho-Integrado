<?php session_start();
 $teste = $_SESSION['email'];
 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <style>
        .bg-secondary-soft {
            background-color: rgba(208, 212, 217, 0.1) !important;
        }
        
        .rounded {
            border-radius: 5px !important;
        }
        
        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }
        
        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }
        
        .file-upload .square {
            height: 250px;
            width: 250px;
            margin: auto;
            vertical-align: middle;
            border: 1px solid #e5dfe4;
            background-color: #fff;
            border-radius: 5px;
        }
        
        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(208, 212, 217, 0.5) !important;
        }
        
        .btn-success-soft {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
        }
        
        .btn-danger-soft {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
        }
        
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.6;
            color: #29292e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e5dfe4;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 5px;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
    </style>
</head>

<body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "mydb";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
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
            <a class="navbar-brand" href="index.php">Chop's <span>Beer</span></a>
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

            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">

                    <h2 class="mb-0 bread">Perfil</h2>
                   
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Page title -->
                        <div class="my-5">
                            <h3>Meu Perfil</h3>
                            <hr>
                        </div>
                        <!-- Form START -->
                        <form class="file-upload" action="verificaProfile.php" method="post">
                            <div class="row mb-5 gx-5">
                                <!-- Contact detail -->
                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Detalhes do perfil</h4>
                                            <!-- First Name -->
                                            <div class="col-md-6">
                                                <br>
                                                <label class="form-label">Nome *</label>
                                                <input id="nomee" name="nomee"type="text" class="form-control" placeholder="" aria-label="First name" value=
                                                "<?php
                                                $nome ="SELECT pessoa.nome FROM pessoa JOIN cliente WHERE pessoa.id=cliente.pessoa_id AND cliente.email = '$teste'";
                                                $result=mysqli_query($conn,$nome);
                                        
                                                if (mysqli_num_rows($result) > 0) {
                                                    
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                      echo ($row['nome']);
                                                    }
                                                  } else {
                                                    echo ("0 results");
                                                  }
                                                ?>">
                                               
                                            </div>
                                            <!-- Last name -->
                                            <div class="col-md-6">
                                                <label class="form-label">Sobrenome *</label>
                                                <input id="sobrenomee" name="sobrenomee" type="text" class="form-control" placeholder="" aria-label="Last name" value=   
                                                "<?php
                                                $nome ="SELECT pessoa.sobrenome FROM pessoa JOIN cliente WHERE pessoa.id=cliente.pessoa_id AND cliente.email = '$teste'";
                                                $result=mysqli_query($conn,$nome);
                                        
                                                if (mysqli_num_rows($result) > 0) {
                                                    
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                      echo ($row['sobrenome']);
                                                    }
                                                  } else {
                                                    echo ("0 results");
                                                  }
                                                ?>">
                                            </div>
                                            <!-- Phone number -->
                                            <div class="col-md-6">
                                                <label class="form-label">Data de nascimento *</label>
                                                <input id="dataNascimentoo" name="dataNascimentoo" type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php
                                                $nome ="SELECT pessoa.dataNascimento FROM pessoa JOIN cliente WHERE pessoa.id=cliente.pessoa_id AND cliente.email = '$teste'";
                                                $result=mysqli_query($conn,$nome);
                                        
                                                if (mysqli_num_rows($result) > 0) {
                                                    
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                      echo ($row['dataNascimento']);
                                                    }
                                                  } else {
                                                    echo ("0 results");
                                                  }
                                                ?>"></div>
                                            <!-- Mobile number -->
                                            <div class="col-md-6">
                                                <label class="form-label">CPF *</label>
                                                <input id="cpff" name="cpff" type="text" class="form-control" placeholder="" aria-label="Phone number" value=
                                                "<?php
                                                $nome ="SELECT cliente.cpf FROM pessoa JOIN cliente WHERE pessoa.id=cliente.pessoa_id AND cliente.email = '$teste'";
                                                $result=mysqli_query($conn,$nome);
                                        
                                                if (mysqli_num_rows($result) > 0) {
                                                    
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                      echo ($row['cpf']);
                                                    }
                                                  } else {
                                                    echo ("0 results");
                                                  }
                                                ?>">
                                            </div>
                                            <!-- Email -->
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email *</label>
                                                <input id="emaill" name="emaill" type="email" class="form-control" id="inputEmail4" value= 
                                                "<?php
                                                $nome ="SELECT cliente.email FROM pessoa JOIN cliente WHERE pessoa.id=cliente.pessoa_id AND cliente.email = '$teste'";
                                                $result=mysqli_query($conn,$nome);
                                        
                                                if (mysqli_num_rows($result) > 0) {
                                                    
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                      echo ($row['email']);
                                                    }
                                                  } else {
                                                    echo ("0 results");
                                                  }
                                                ?>">
                                            </div>


                                        </div>
                                        <!-- Row END -->
                                    </div>
                                </div>

                            </div>
                            <!-- Row END -->

                            <!-- change password -->
                            <div class="col-xxl-6">
                                <div class="bg-secondary-soft px-4 py-5 rounded">
                                    <div class="row g-3">
                                        <h4 class="my-4">Altere sua senha</h4>
                                        <!-- Old password -->
                                        <div class="col-md-6">

                                        </div>
                       
                                        <!-- New password -->
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword2" class="form-label">New password *</label>
                                            <input id="senhaa" name="senhaa" type="password" class="form-control" id="exampleInputPassword2">
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                    </div>
                    <!-- Row END -->
                    <!-- button -->
                    <div class="gap-3 d-md-flex justify-content-md-end text-center">
                        <button type="submit"  class="btn btn-primary btn-lg">Update profile</button>
                    </div>
                    </form>
                    <!-- Form END -->
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
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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



</body>

</html>