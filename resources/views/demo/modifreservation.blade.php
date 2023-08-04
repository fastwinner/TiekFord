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



        @php
            $reservation=App\Models\Reservation::where('id_reservation',$id)->first();
        @endphp

        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="col-6">
                <form method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating date">
                                <input type="date" class="form-control datetimepicker-input" id="date" name="date" value={{$reservation->DateReservation}} placeholder="Date" />
                                <label for="date">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date">
                                <input type="time" class="form-control datetimepicker-input" id="time" name="time" value={{$reservation->HeureReservation}} placeholder="time" />
                                <label for="time">heure</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control datetimepicker-input" id="NombrePersonne" name="NombrePersonne" value={{$reservation->NombrePersonne}} placeholder="NombrePersonne"/>
                                <label for="select1">Nombre de personnes</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" name="SpecialRequest" value={{$reservation->SpecialRequest}} style="height: 100px"></textarea>
                                <label for="message">Requête spéciale</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Valider</button>
                        </div>
                    </div>
                </form>
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