@extends('layout.nav')

 @section('liste')

<div class="navbar-nav mx-auto p-4 p-lg-0">
               <a href="{{url('/')}}" class="nav-item nav-link ">Accueil</a>
                <a href="{{url('/produit')}}" class="nav-item nav-link active ">Produits</a>
                <a href="{{url('/service')}}" class="nav-item nav-link ">Services</a>
                <a href="{{url('/')}}#apropos" class="nav-item nav-link">A propos de Nous</a>



                <a href="{{url('/')}}#addresse" class="nav-item nav-link">Adresses</a>
 </div>
@endsection

@section('contenu')


<style>
    .custom-bg {
        background-image: url("{{asset('frontend/assets/img/product7.jpg')}}");
        background-size: cover;
        background-position: center;
    }
    .card {
    background-image: url("{{asset('frontend/assets/img/'.$categorie->chemin)}}");
    background-size: cover;
    background-position: center;
  position: relative;
  width: 295px;
  height: 254px;

  border: solid 4px #333;
  box-shadow: -5px 5px #333;
  transition: all .2s ease-in-out;
  display: flex;
  justify-content: center;
  cursor: pointer;
  opacity: 0.8;

}
.descriptif{
    text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.952); /* Ajoutez une ombre blanche au texte */
    opacity: 1;
}

.card:hover {
  margin: 10px 10px 0 0;
  box-shadow: 0px 0px #333;
}


.card .img-card {
  position: absolute;
  top: 0;
  left: 0;
  width: auto;
  height: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: filter .2s 1s ease-in-out;

}

.card:hover .img-card {
  filter: blur(1px);

}

.card .add-cart {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: calc(100% - 50px);

  background-color: rgba(0, 0, 0, 0.1);
  text-align: center;
  line-height: 250px;
  font-weight: bold;
  font-size: 15px;
  opacity: 0;

}

.card:hover .add-cart {
  opacity: 1;
  transition: opacity .3s 1s ease-in-out;
}
.card:hover .add-cart p{
 color: black;
 font-style: italic;
}

.card .info-card {
  position: absolute;
  height: 50px;
  width: 100%;
  bottom: 0;
  left: 0;
  right: 0;
  border-top: solid 1px #333;
}

.card .info-card p {
  font-size: 14px;
  margin: 5px;
  color: black;
}

.descriptif{
    font-size: 13px;
  line-height: 1.5;
  margin-bottom: 5px;
  margin-top: 70px;
}



</style>
<body class="custom-bg">
<div class="container-xxl bg-light my-6 py-6 pt-0 ">
<div class="container">
       <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Nos Produits </p>
                <h1 class="display-6 mb-4"> {{$noms}} </h1>

            </div>
            <div class="row g-4">





                @foreach ($elements as $element)


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" d-flex flex-column  rounded overflow-hidden h-100">
                      <!--  <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">{{$element->prix}}</div>
                            <h3 class="mb-3">{{$element->noms}}</h3>
                            <span>{{$element->descriptif}}</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <button type="button" class="btn btn-outline-light"><i class="bi bi-cart-plus black"></i></button></button>

                        </div>-->
                        <div class="card" >
                            <div class="img-card">

                            </div>
                            <div class="add-cart"><p class="descriptif">{{$element->descriptif}}</p></div>
                            <div class="info-card" style="background-color: white;">

                              <p><strong>{{$element->noms}}</strong></p>
                              <p>Prix : {{$element->prix}} Fcfa</p>
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
