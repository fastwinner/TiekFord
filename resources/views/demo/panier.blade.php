<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Odarai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="import/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('import/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('import/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('import/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('import/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('import/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Odarai Restaurant</h1>
                    <!-- <img src="import/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index" class="nav-item nav-link">Accueil</a>
                        <a href="about" class="nav-item nav-link ">Informations</a>
                        <a href="service" class="nav-item nav-link">reservation</a>
                        <a href="menu" class="nav-item nav-link">Menu</a>
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
                        <a href="contact" class="nav-item nav-link">Contacts</a>
                    </div>
                    @auth
                        {{-- Contenu à afficher lorsque l'utilisateur est connecté --}}
                        <div class="d-flex align-items-center">
                            @if (Auth::user()->admin)
                                <a href="dashboard" class="me-1" > <img src="import/icone/admin.svg"> </a>
                            @else
                                <a href="panier" class="me-1"> <img src="import/icone/user2.svg"> </a>  
                            @endif
                            {{ Auth::user()->name }} 
                            <form method="POST">
                                @method("delete")
                                @csrf
                                <button class="btn btn-primary rounded-pill ms-2">Deconnexion</button>    
                            </form>     
                       </div>
                        
                    @else
                        {{-- Contenu à afficher lorsque l'utilisateur n'est pas connecté --}}
                        <div class="btn btn-primary py-2 rounded-pill px-4"> <a href="connexion" class="text-white">Connexion </a>/<a href="inscription" class="text-white" > inscription</a></div>
                    @endauth
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">{{Auth::user()->name}} {{Auth::user()->first_name}}</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- panier Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                                <h2>Panier</h2>
                            </div>
                            <div class="row g-4">
                                
                                @php
                                    $prix_panier=0;
                                    $quantité_panier=0 
                                @endphp
                                @foreach($panier as $plat)
                                @php
                                    $element = App\Models\Plat::where('id_plat', $plat->id_plat)->first();
                                    $prix_local=($element->prix_plat)*($plat->quantité);
                                    $prix_panier=$prix_local+$prix_panier
                                @endphp
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <a href={{"plat-".($element->id_plat)}}>                                     
                                            <img class="flex-shrink-0 img-fluid rounded" src="import/menu/{{$element->image}}" alt="" style="width: 80px;">
                                         </a>
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$element->nom_plat}} quantité:{{$plat->quantité}} </span>
                                                <span class="text-primary">{{$prix_local}} FCFA</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @if ($prix_panier !=0)
                    <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
                        <h4>prix total : {{$prix_panier}} FCFA</h4>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <a href="validation">
                            <button class="btn btn-primary mt-5"><img src="import/icone/buy.svg" alt="">commander</button>  
                        </a>
                    </div>
                @endif

            </div>
        </div>
        <!-- panier End -->
        @php
            $reservations=App\Models\Reservation::all();
            $count=App\Models\Reservation::count();
        @endphp
        
        @if ($count)
            <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h2>Reservations</h2>
            </div>
        @else
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h4 class="ff-secondary">C'est ici que vos réservations s'afficheront</h4>
                    <a href="service"> reservez maintenant !</a>
                </div>
            </div>
        @endif

        @foreach ($reservations as $reservation)
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>{{$reservation->DateReservation}} à {{$reservation->HeureReservation}} </span>
                            <span class="text-primary">{{$reservation->NombrePersonne}} personne(s) </span>
                        </h5>
                        <small class="fst-italic">{{$reservation->SpecialRequest}}</small>
                    </div>
                    <a href={{"modifReservation-".$reservation->id_reservation}}>
                        <button class="btn btn-primary ms-5"><img src="import/icone/edit.svg" alt=""></button>  
                    </a>
                    <a href={{"supprimer-".$reservation->id_reservation}}>
                        <button class="btn btn-primary ms-5"><img src="import/icone/delete.svg" alt=""></button>  
                    </a>
                </div>
            </div>
        @endforeach


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
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Nous sommes ouvert: </h4>
                        <h5 class="text-light fw-normal">Lundi - Samedi</h5>
                        <p>09h - 21h</p>
                        <h5 class="text-light fw-normal">Dimanche</h5>
                        <p>10h - 08h</p>
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
    <script src="import/lib/wow/wow.min.js"></script>
    <script src="import/lib/easing/easing.min.js"></script>
    <script src="import/lib/waypoints/waypoints.min.js"></script>
    <script src="import/lib/counterup/counterup.min.js"></script>
    <script src="import/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="import/lib/tempusdominus/js/moment.min.js"></script>
    <script src="import/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="import/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="import/js/main.js"></script>
</body>

</html>