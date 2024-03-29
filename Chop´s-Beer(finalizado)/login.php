
 <?php session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
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
            
            .container {
                margin-top: 10%;
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
                        <a class="navbar-brand" href="index.html" id="titulo">CHOP'S <span id="beer">BEER</span></a>
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Login</h2>
                           
                            <form action="verificaLogin.php" method="post">


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control" />
                                    <label class="form-label" for="form3Example3">Email</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="senha" name="senha" class="form-control" />
                                    <label class="form-label" for="form3Example4">Senha</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-block mb-4" id="registrobtn"> Entrar </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Não tem uma conta? <a href="registro.php">Registre-se!</a></p>
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

    
</body>

</html>