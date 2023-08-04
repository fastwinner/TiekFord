<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Odarai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('import/img/favicon.ico')}}" rel="shortcut icon">
    <link href="{{asset('import/img/242452.png')}}" rel="shortcut icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('import/lib/animate/animate.min.css" rel="stylesheet')}}">
    <link href="{{asset('import/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('import/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('import/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('import/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement...</span>
            </div>
        </div>
        <!-- Spinner End -->


       <!-- Navbar & Hero Start -->
       <div class="container-xxl position-relative p-0">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Odarai</h1>
                    <!-- <img src="import/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="presentation#fonc" class="nav-item nav-link ">Fonctionnalités </a>
                        <a href="presentation#tarif" class="nav-item nav-link">Tarifs</a>
                        <a href="presentation#tem" class="nav-item nav-link">Témoignages</a>
                        <a href="presentation#cont" class="nav-item nav-link">Contact</a>
                        <!--
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking" class="dropdown-item">Booking</a>
                                <a href="team" class="dropdown-item">Our Team</a>
                                <a href="testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        -->
                        <a href="responsable" class="nav-item nav-link active">Responsables restaurant</a>
                    </div>
                    <a href="demo/index" class="btn btn-primary py-2 px-4">Voir la demo</a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Responsables restaurant</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        

        <!-- fonctionnalités Start -->
        <div class="container-fluid py-5" id="fonc">
            <div class="container">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6">
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis neque enim a impedit ad 
                            id explicabo suscipit harum totam, voluptas delectus ipsum architecto adipisci dolores accusantium 
                            excepturi eum deserunt veniam.Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam 
                            amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- inscription start-->
        <div class="container d-flex justify-content-center pb-5" id="cont">
            <div class="col-md-6">
                <div class="col text-center">
                    <h3 class="section-title ff-secondary text-center text-primary fw-normal">Inscrivez nous</h3>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" required value="{{old('name')}}" id="name" name="name" placeholder="">
                                    <label for="name">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" required value="{{old('first_name')}}" id="first_name" name="first_name" placeholder="">
                                    <label for="first_name">Prenoms</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="Email" class="form-control" required value="{{old('email')}}" id="email" name="email" placeholder="">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            @if (session('email_error'))
                                <div  class="alert alert-danger" role="alert">
                                    {{session('email_error')}}
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" required value="{{old('NomEtab')}}" id="NomEtab" name="NomEtab" placeholder="">
                                    <label for="NomEtab">Nom de l'etablissement</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" required id="password" name="password" placeholder="">
                                    <label for="MotDePasse">Mot de passe </label>
                                </div>
                            </div>
                            @if (session('motdepasse_error'))
                                <div  class="alert alert-danger" role="alert">
                                    {{session('motdepasse_error')}}
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" required id="ConfMotDePasse" name="ConfMotDePasse" placeholder="">
                                    <label for="ConfMotDePasse">Confirmez votre mot de passe</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">s'inscrire</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--inscription end-->      
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Compagnie</h4>
                        <a class="btn btn-link" href="about">A propos</a>
                        <a class="btn btn-link" href="contact">Contactez nous</a>
                        <a class="btn btn-link" href="booking">Réservation</a>
                        <a class="btn btn-link" href="">Politique de confidentialité</a>
                        <a class="btn btn-link" href="">Termes & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contactez nous</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>ABIDJAN, COCODY ANGRÉ MAHOU</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+225 0506272733</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Disponible sur</h4>
                        <div class="row">
                            <div class="col-2">
                                <a href=""> <img src="import/img/play-store.svg"> </a> 
                            </div>
                            <div class="col"> 
                                <h5 class="text-light fw-normal">Android</h5>      
                            </div> 
                        </div>
                        <div class="row pt-3">
                            <div class="col-2">
                                <a href=""> <img src="import/img/app-store.svg"> </a> 
                            </div>
                            <div class="col"> 
                                <h5 class="text-light fw-normal">IOS</h5>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Bulletin</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Odarai</a>, Tout Les Droits Reservés. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							conçu Par <a class="border-bottom" href="https://htmlcodex.com">TiekFord</a><br><br>
                            Distribué Par <a class="border-bottom" href="https://themewagon.com" target="_blank">Firewall Agency</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index">Acueil</a>
                                <a href="">Cookies</a>
                                <a href="">Aide</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset ('import/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset ('import/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset ('import/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset ('import/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset ('import/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset ('import/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset ('import/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset ('import/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('import/js/main.js')}}"></script>
</body>

</html>
                        