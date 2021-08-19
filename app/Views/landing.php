<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Aasaanwork</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- link rel="stylesheet" href="mdb.min.css" / -->
    <link rel="stylesheet" href="bootstrap.css" />
    <!-- Custom styles -->
</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
        /* Carousel styling */
        nav {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            /*background: rgba(128,128,128,0.1);*/
        }
        .navbar-dark {
            text-shadow: 0 0 0px #fff, 0 0 50px #000000;
        }
        .navbar-link {
            text-shadow: 0 0 0px #fff, 0 0 50px #000000;
        }
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .shadow-2-strong {
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .25), 0 5px 15px 2px rgba(0, 0, 0, .2) !important;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .25), 0 5px 15px 2px rgba(0, 0, 0, .2) !important
        }

        .carousel-item:nth-child(3) {
            border-top: 59px solid #222222;
            background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(1) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }
        }

        /*navbar background color*/
        @media (max-width: 992px) {
            nav {
                background-image: linear-gradient(grey, grey);
            }
        }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="">
                    <strong>AasaanWork</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#intro">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" rel="nofollow" target="_blank">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" target="_blank">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" target="_blank">Pricing</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav list-inline">
                        <div class="text-center">
                            <?php if ($isSignedIn) : ?>
                            <a class="btn btn-primary" href="/dashboard" title="Dashboard">Dashboard</a>
                            <?php else : ?>
                            <a class="btn btn-primary" href="/access" title="Sign in">Sign in</a>
                            <?php endif; ?>
                        </div>
                        <!-- Icons -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Carousel wrapper -->
        <div id="introCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#introCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#introCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#introCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h5 class="fs-1 fw-normal">Simplfying business processes</h5>
                            <h5>Best & free guide of responsive web design</h5>
                            <a class="btn btn-outline-light btn-lg m-2" href="" role="button" rel="nofollow"
                                target="_blank">Start tutorial</a>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h2>You can manage your data easily</h2>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item">
                    
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#introCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#introCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            <!--Section: Content-->
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                            <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1355&q=80"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>Aasaanwork</strong></h4>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                        </p>
                        <p><strong>steps of process</strong></p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                            nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                            alias, unde optio accusantium soluta, iusto molestiae adipisci et?
                        </p>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Work Comfortably</strong></h4>

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://images.unsplash.com/photo-1554224155-1696413565d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Convert to digital</h5>
                                <p class="card-text">
                                    Digitalization is the use of digital technologies to change a business model and
                                    provide new revenue and value-producing opportunities. it is the process of moving
                                    to a digital business.
                                </p>
                                <a href="#!" class="btn btn-outline-secondary">Visit</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://images.unsplash.com/photo-1538688273852-e29027c0c176?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Work from Anywhere</h5>
                                <p class="card-text">
                                    The pandemic has hastened a rise in remote working for knowledge-based
                                    organizations. Personal technology and digital connectivity had advanced so far and
                                    so fast that people can find our business.
                                </p>
                                <a href="#!" class="btn btn-outline-secondary">Visit</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://images.unsplash.com/photo-1503551723145-6c040742065b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Finding reports</h5>
                                <p class="card-text">
                                Reports are auto generated by the UI. All are updated by every second. We provide all necessary information and We have flexible operations. Finally, forget about the reports.
                                </p>
                                <a href="#!" class="btn btn-outline-secondary">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="mb-5">
                <h4 class="mb-5 text-center"><strong>New customer</strong></h4>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="form3Example2">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Checkbox -->

                            <!-- Submit button -->
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>
                            </div>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--Section: Content-->
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <div class="py-4 text-center">
            <a role="button" class="btn btn-primary btn-lg m-2" href="" rel="nofollow" target="_blank">
                Terms and services
            </a>
            <a role="button" class="btn btn-primary btn-lg m-2" href="" target="_blank">
                Privacy policy
            </a>
        </div>

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center">
            <p>Follow Aasaanwork on social media</p>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-dark" href="http://aasaanwork.in/">Aasaanwork.in</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- bootstrap -->
    <script type="text/javascript" src="bootstrap.bundle.js"></script>

    <!-- Custom scripts -->
</body>

</html>