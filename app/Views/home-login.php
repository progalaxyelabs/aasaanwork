<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/customer1style.1.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div id="nav" class="container-fluid">
            <a class="navbar-brand" href="https://www.progalaxyelabs.com/">
                <img id="companyLogo" src="logo1.png">
                Aasaan Work
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://www.progalaxyelabs.com/#message-form">Get Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/917075190199?text=Hi%20ProGalaxy%20eLabs" role="button">Contact on Whatsapp</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form id="form-content" class="form-control" action="/home/login">
                    <label for="signinName">Username</label>
                    <input id="signinName" class="form-control" type="text" placeholder="Enter Username">

                    <label for="passwordInput">Password</label>
                    <input id="passwordInput" class="form-control" type="password" placeholder="Enter Password">
                    <div>
                        <label for="checkboxInput">Remember password</label>
                        <input id="checkboxInput" type="checkbox" class="form-check-input">
                    </div>

                    <div>
                        <a href="#">Forget password?</a>
                    </div>

                    <div>
                        <button class="btn btn-primary">Login</button>
                    </div>

                    <div>
                        <span>Create account? <a href="#">Sign Up?</a></span>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>