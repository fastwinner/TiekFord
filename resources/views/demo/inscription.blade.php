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
    <div class="container-fluid vh-100 bg-dark hero-header d-flex align-items-center">
        <div class="col-6">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h1 class="section-title ff-secondary text-start text-primary fw-normal">Inscription</h1>
                <form method="post" action="">
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
        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
            <img class="img-fluid" src="import/img/hero.png" alt="">
        </div>
    </div>
</body>

</html>
