<!-- Eric Rubio Sanchez -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">




</head>

<body>


    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="border border-3 border-primary"></div>
                    <div class="card bg-white shadow-lg">
                        <div class="card-body p-5">
                            <div class="row mb-3">
                                <div class="col">
                                    <h2 class="fw-bold mb-2 text-uppercase ">Login</h2>
                                </div>


                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col ">
                                    <div id="g_id_onload" data-client_id="281315218974-v6a5f0cgdkd40afl85jkvmcpvermp2er.apps.googleusercontent.com" data-callback="onSignIn">
                                    </div>
                                    <div class="g_id_signin" data-type="standard"></div>
                                </div>
                            </div>
                            <div class="row ">
                                <!-- Entrar com anonim -->
                                <div class="col text-center">
                                    <button type="button" class="btn btn-primary">Entrar como anonim</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






</html>
<script src="../Controlador/signin.mjs"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>