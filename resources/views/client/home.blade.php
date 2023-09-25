@extends('layout.nav')
@section('accueil')
<div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Accueil</a>
                <a href="{{url('/produit')}}" class="nav-item nav-link ">Produits</a>
                <a href="{{url('/service')}}" class="nav-item nav-link ">Services</a>
                <a href="{{url('/')}}#apropos" class="nav-item nav-link">A propos de Nous</a>



                <a href="{{url('/')}}#addresse" class="nav-item nav-link">Adresses</a>
 </div>
@endsection
@section('contenu')




    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('frontend/assets/img/carousel-1.jpg')}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// La meilleure Pâtisserie D'Abidjan</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">A Vôtre service depuis 1993</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Artisan Boulanger - Pâtissier - Glacier - Chocolatier</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('frontend/assets/img/carousel-.jpg')}}" alt="" >
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">//La meilleure Pâtisserie</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Toujours là pour vous</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Et prête à vous accueillir dans un cadre spacieux et jovial.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Produits de la pâtisserie</p>
                <h1 class="display-6 mb-4">Explorez nos differentes  Catégories </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">A partir de 750 Fcfa</div>
                            <h3 class="mb-3">Amuse-Bouche</h3>
                            <span>Dégustez nos créations « Amuse Bouche » qui éveilleront vos papilles avant le plat principal. Des bouchées savoureuses qui vous préparent à une expérience gastronomique exceptionnelle.</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/product10.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('afficher.elements', ['Amuse-Bouche']) }}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">A partir de 3000 Fcfa</div>
                            <h3 class="mb-3">Sandwiches</h3>
                            <span>Découvrez nos sandwiches savoureux, préparés avec des ingrédients de qualité et des combinaisons de saveurs uniques. Idéaux pour une pause repas rapide et délicieuse.</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/product12.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('afficher.elements', ['Sandwiches']) }}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">A partir de 500 Fcfa</div>
                            <h4 class="mb-3">Viennoiseries</h4>
                            <span>Plongez dans le plaisir pur des viennoiseries fraîches, préparées avec passion pour une expérience gustative délectable à chaque bouchée.</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/product11.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('afficher.elements', ['Viennoiseries']) }}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">A partir de 1500 Fcfa</div>
                            <h4 class="mb-3">Glaces</h4>
                            <span>Découvrez l'art glacé avec nos créations de glaces artisanales. Des saveurs authentiques qui vous transporteront vers un paradis rafraîchissant.</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/product8.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('afficher.elements', ['Glace']) }}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">A partir de 3500 Fcfa</div>
                            <h4 class="mb-3">Bagel</h4>
                            <span>Nos bagels fraîchement préparés et garnis avec une variété d’accompagnements savoureux sont parfaits pour satisfaire vos envies à tout moment de la journée.</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/product13.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('afficher.elements', ['Bagel']) }}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">A partir de 1000 Fcfa</div>
                            <h4 class="mb-3">Autres</h4>
                            <span>Decouvrez ici les autres offres de notre pâtisserie</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/product18.jpg')}}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{url('/produit')}}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Product End -->

    <!-- About Start -->
    <div class="container-xxl py-6" >
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" id="apropos">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/interieur.jpg')}}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/exterieur.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" >
                    <div class="h-100" >
                        <p class="text-primary text-uppercase mb-2">// A propos de nous</p>
                        <h1 class="display-6 mb-4">Nous cuisinons chaque article avec la meilleure expertise</h1>
                        <p> Notre équipe de pâtissiers passionnés travaille avec soin et dévouement pour créer des délices qui éveillent les papilles et réchauffent les cœurs. Chaque gâteau, chaque glace et chaque petit chocolat est confectionné avec amour, en utilisant des ingrédients de la plus haute qualité. Venez vous perdre dans un monde de saveurs exquises et de textures divines, où chaque bouchée est une expérience inoubliable</p>
                        <p>Que vous soyez en quête du croissant parfait pour accompagner votre café du matin ou que vous souhaitiez célébrer un événement spécial avec une pièce montée somptueuse, notre pâtisserie est l'endroit où les rêves sucrés prennent vie.</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Produits de qualité
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Produits personnalisés
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Commande en ligne
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Livraison à domicile
                            </div>
                        </div>
                     <!--bouton   <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->











    <!-- Testimonial Start -->
    <div class="container-xxl  my-6 py-6 pb-0">
        <div class="container ">
            <!--
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Client's Review</p>
                <h1 class="display-6 mb-4">More Than 20000+ Customers Trusted Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-1.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-2.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-3.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('frontend/assets/img/testimonial-4.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>-->
            <div class="bg-primary text-light rounded-top p-5 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4 text-light mb-0">Inscrivez vous à notre Newsletter</h1>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="position-relative">
                            <input class="form-control bg-transparent border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-dark py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->










    @endsection
