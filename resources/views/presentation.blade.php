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
        <div class="container-fluid Position-relative p-0">
            
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
                        <a href="#fonc" class="nav-item nav-link ">Fonctionnalités </a>
                        <a href="#tarif" class="nav-item nav-link">Tarifs</a>
                        <a href="#tem" class="nav-item nav-link">Témoignages</a>
                        <a href="#cont" class="nav-item nav-link">Contact</a>
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
                        <a href="responsable" class="nav-item nav-link">Responsables restaurant</a>
                    </div>
                    <a href="index" class="btn btn-primary py-2 px-4">Voir la demo</a>
                </div>
            </nav>
            
            <div class="container-fluid  py-5 bg-dark mb-5">
            <!--Odarai start-->
                <div class="row pt-5 mt-5">
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img height="300" src="import/img/presentation.jpg">
                    </div>
                    <div class="col">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 text-center text-lg-start">
                                    <h1 class="display-3 text-light animated slideInLeft">Odarai</h1>
                                    <p class="text-light animated slideInLeft mb-4 pb-2">Découvrez Odarai, notre application dédiée à améliorer la gestion 
                                    de votre restaurant. Inscrivez-vous dès maintenant pour bénéficier de son installation dans votre établissement.</p>
                                    <a href="index" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Voir la demo </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            <!--Odarai End-->
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- fonctionnalités Start -->
        <section id="fonc" data-spy>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="section-title ff-secondary text-start text-primary fw-normal">Fonctionnalités</h3>
                        <h3 class="mb-4"><img src="import/icone/menu.svg"> Gestion des menus</h3>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-1">
            <div class="d-flex justify-content-end">
                <div class="row g-5 align-items-center justify-content-end">
                    <div class="col-6">
                        <h3 class="mb-4"><img src="import/icone/reservation.svg"> Gestion des réservations</h3>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="mb-4"><img src="import/icone/employe.svg"> Gestion des employés</h3>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-1">
            <div class="d-flex justify-content-end">
                <div class="row g-5 align-items-center justify-content-end">
                    <div class="col-6">
                        <h3 class="mb-4"><img src="import/icone/commande.svg"> Gestion des commandes</h3>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-6">
                        <h3 class="mb-4"><img src="import/icone/livraison.svg"> Gestion des livraisons</h3>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        
        <!-- fonctionnalités End -->

        <!--Tarifs start-->
        <div class="container-fluid py-5" id="tarif" data-spy>
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="section-title ff-secondary text-start text-primary fw-normal">Nos Tarifs</h3>
                        <h3 class="mb-4"><img src="import/icone/menu.svg">Pass Or</h3>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5 align-items-center justify-content-end">
                    <div class="col-lg-6">
                        <h3 class="mb-4"><img src="import/icone/menu.svg">Pass Diamant</h3>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <!--tarifs end-->

        <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp" id="tem" data-wow-delay="0.1s" data-spy>
            <div class="container">
                <div class="text-center">
                    <h3 class="section-title ff-secondary text-center text-primary fw-normal">Témoignage</h3>
                    <h1 class="mb-5">Nos Clients !!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="import/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nom Du Client</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="import/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nom Du Client</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="import/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nom Du Client</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="import/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Nom Du Client</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        <!-- contact start-->
        <div class="container pb-5" id="cont" data-spy>
            <div class="col-md-6">
                <div class="col text-end">
                    <h3 class="section-title ff-secondary text-end text-primary fw-normal">Contactez nous</h3>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Prenoms</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Envoyez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--contact end-->      
        
        <div class="row justify-content-center">
            <div class="col d-flex justify-content-center ">
                <a href="https://play.google.com/store/apps?hl=fr&gl=US">
                    <img height="150px" src="import/img/google.jpg">
                </a>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <a href="https://www.apple.com/fr/app-store/">
                    <img height="130px" src="import/img/app.png">
                </a>
            </div>
        </div>

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
                        