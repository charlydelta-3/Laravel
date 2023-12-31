<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mr Chour-Abidjan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}"rel="stylesheet">


</head>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-light" >Mr Chour</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" >Rue des Jardins</a></li>

                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Suivez nous:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-lg-square text-primary border-end rounded-0"  href="https://fr-fr.facebook.com/login/?next=https%3A%2F%2Ffr-fr.facebook.com%2Fpublic%2FMohamed-Chour" target="_blank"><i class="fab fa-facebook-f"></i></a>

                    <a class="btn-lg-square text-primary pe-0" href="https://www.instagram.com/mr.chour.abj/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Mr Chour</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            @yield('accueil')
            @yield('produit')
            @yield('service')
            @yield('liste')
            <div class=" d-none d-lg-flex">
                <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="ps-3">
                    <small class="text-primary mb-0">Contactez nous</small>
                    <p class="text-light fs-5 mb-0">+225 07 02 020 222</p>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('contenu')







  <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5" id="addresse">
            <div class="row g-5">
                 <!-- Adresses -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Nos adresses</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a href="https://goo.gl/maps/tWiUWiqvoQEBmjJbA">Rue des Jardins,Abidjan</a></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+2250702020222">+225 07 02 02 02 22</a></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:mr.chour.boulanger@gmail.com">Envoyer un e-mail</a></p>

                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://www.instagram.com/mr.chour.abj/" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://fr-fr.facebook.com/login/?next=https%3A%2F%2Ffr-fr.facebook.com%2Fpublic%2FMohamed-Chour" target="_blank"><i class="fab fa-facebook-f"></i></a>


                    </div>
                </div>
                 <!-- Horaires -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Nos Horaires</h4>
                    <p class="mb-2"><a >Lundi-Jeudi: 6h à minuit</a></p>
                    <p class="mb-2"><a >Vendredi-Dimanche: 6h à 1h </a></p>



                </div>




            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Mr Chour Abidjan</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="">Charly Koné</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
</body>
 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</html>
