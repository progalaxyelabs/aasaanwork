<?php
$auth = \Config\Services::auth();
$isSignedIn = $auth->isSignedIn();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= csrf_meta() ?>
    <title>Aasaan Work</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link href="/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- <link rel="stylesheet" href="/animate.4.1.1.min.css" /> -->

    <!-- <link rel="stylesheet" href="/styles.2.css" /> -->
    <link rel="stylesheet" href="/styles.1.css">
    <link rel="stylesheet" href="/customer1style.1.css">
</head>

<body>

    <div id="companyLogoNavBar">
        <div id="companyLogoDiv">
            <img id="companyLogo" src="/logo1.png">
        </div>
        <div id="navBarDiv">
            <nav class="navbar navbar-light bg-light">
                <div id="nav" class="container-fluid">
                    <a class="navbar-brand" href="/">
                        Aasaan Work
                    </a>

                    <?php if ($isSignedIn) : ?>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="https://wa.me/917075190199?text=Hi" role="button">Contact on
                                    Whatsapp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/signout">Sign out</a>
                            </li>
                        </ul>

                    </div>

                    <?php endif; ?>

                </div>
            </nav>
        </div>
    </div>




    <?= $this->renderSection('content') ?>

    <footer></footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->

    <script src="/http-request.1.js"></script>
    <script src="/form-controls.1.js"></script>
    <script src="/modules.1.js"></script>
    <script src="/loader.1.js"></script>
    <script src="/script.3.js"></script>
</body>

</html>