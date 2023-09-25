 @extends('layout.nav')

 @section('produit')

<div class="navbar-nav mx-auto p-4 p-lg-0">
               <a href="{{url('/')}}" class="nav-item nav-link ">Accueil</a>
                <a href="{{url('/produit')}}" class="nav-item nav-link active ">Produits</a>
                <a href="{{url('/service')}}" class="nav-item nav-link ">Services</a>
                <a href="{{url('/')}}#apropos" class="nav-item nav-link">A propos de Nous</a>



                <a href="{{url('/produit')}}#addresse" class="nav-item nav-link">Adresses</a>
 </div>
@endsection

@section('contenu')
<style>
    .custom-bg {
        background-image: url("{{asset('frontend/assets/img/product1.jpg')}}");
        background-size: cover;
        background-position: center;
    }
</style>
<body class="custom-bg">
<div class="container-xxl bg-light my-6 py-6 pt-0 ">
<div class="container">
       <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Produits de la pâtisserie</p>
                <h1 class="display-6 mb-4">Explorez nos differentes  Catégories </h1>
            </div>
            <div class="row g-4">





                @foreach ($categories as $categorie)


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">{{$categorie->intervalle}}</div>
                            <h3 class="mb-3">{{$categorie->nom}}</h3>
                            <span>{{$categorie->description}}</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/' . $categorie->chemin) }}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('afficher.elements', ['nom' => $categorie->nom]) }}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

   <!-- Product End -->
</div>
</div>
</body>

@endsection
