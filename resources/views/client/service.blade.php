@extends('layout.nav')
@section('service')
<div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link ">Accueil</a>
                <a href="{{url('/produit')}}" class="nav-item nav-link ">Produits</a>
                <a href="{{url('/service')}}" class="nav-item nav-link active">Services</a>
                <a href="{{url('/')}}#apropos" class="nav-item nav-link">A propos de Nous</a>



                <a href="{{url('/service')}}#addresse" class="nav-item nav-link">Adresses</a>
 </div>
@endsection

@section('contenu')
<style>
    .custom-bg {
        background-image: url("{{asset('frontend/assets/img/product8.jpg')}}");
        background-size: cover;
        background-position: center;
    }
</style>

<body class="custom-bg">
<div class="container-xxl bg-light my-6 py-6 pt-0 ">
<div class="container">
 <!-- Service Start -->

 <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-primary text-uppercase mb-2">// Nos Services</p>
                    <h1 class="display-6 mb-4">Qu'est ce que nous vous offrons?</h1>
                    <p class="mb-5">Bienvenue à Mr Chour !

                        Chez nous, la passion de la pâtisserie se mélange à la créativité pour vous offrir une expérience sucrée inoubliable. Depuis 1993, nous nous sommes engagés à satisfaire vos papilles avec des créations délicieuses et artisanales.

                        Nos pâtissiers talentueux mettent tout leur amour dans chaque gâteau, chaque pâtisserie et chaque produit que nous proposons. Que vous cherchiez à célébrer une occasion spéciale, à égayer votre journée avec une gourmandise sucrée, ou à surprendre vos proches avec un cadeau délicieux, vous trouverez toujours quelque chose d'extraordinaire chez nous.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-bread-slice text-white"></i>
                                </div>
                                <h5 class="mb-0">Produits de qualité</h5>
                            </div>
                            <span>À Mr chour, la qualité est notre obsession.

                                Chaque jour, nous sélectionnons les meilleurs ingrédients pour des créations qui dépassent vos attentes. Notre engagement envers l'excellence se reflète dans chaque bouchée, chaque couche et chaque saveur de nos créations artisanales.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-birthday-cake text-white"></i>
                                </div>
                                <h5 class="mb-0"> Produits personnalisés</h5>
                            </div>
                            <span> À Mr chour, personnalisation rime avec délicatesse. Créez des moments uniques avec nos pâtisseries sur mesure. Choisissez vos saveurs, couleurs et designs, et laissez-nous donner vie à vos idées sucrées. Faites de chaque bouchée une expérience inoubliable.

                                </span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-cart-plus text-white"></i>
                                </div>
                                <h5 class="mb-0">Commande en ligne</h5>
                            </div>
                            <span>Parcourez notre sélection exquise de pâtisseries artisanales, personnalisez votre gâteau à votre guise, et faites-nous parvenir votre commande en un clin d'œil. La douceur sera bientôt à votre porte, prête à égayer votre journée grâce à nos contacts en ligne. Faites place aux plaisirs sucrés dès aujourd'hui !</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-truck text-white"></i>
                                </div>
                                <h5 class="mb-0">Livraison à domicile</h5>
                            </div>
                            <span>Après votre commande nos agents se chargeront du reste.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/service-1.jpg')}}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="{{asset('frontend/assets/img/service-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
</div>
</div>
</body>
@endsection
