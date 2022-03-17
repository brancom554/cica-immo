@extends('admin.app')
@section('content')

   
<div class="container-fluid p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-primary col-md-12">
            <li class="breadcrumb-item active text-light" aria-current="page">Tableau de bord</li>
            <li class="breadcrumb-item text-light"><a class="text-light " style="text-decoration:none;!important" href="#">Annonces / Ajouter une annonce</a></li>
        </ol>    
    </div>
    
        <div class="row p-3">
                <div class="card col-md-4 " style="border-style: none">
                    <div class="card-body">
                        <h5 class="card-title">Détails de l'annonce</h5><hr>
                        <p class="card-text pt-4">
                            <input class="form-control text-primary bg-transparent" readonly value="{{ 'Libelle : '.$annonce->annonce_titre }}"><br>
                            <input class="form-control text-primary bg-transparent" readonly value="{{ 'Type d\'annonce : '.$annonce->annonce_type }}"><br>
                            <input class="form-control text-primary bg-transparent" readonly value="{{ 'Côut : '.$annonce->annonce_cout }}"><br>
                            <input class="form-control text-primary bg-transparent" readonly value="{{ 'Contact : '.$annonce->annonce_contact }}"><br>
                            <textarea cols="20" rows="20" class="form-control text-primary bg-transparent" readonly>Description : {{ $annonce->annonce_description }}
                            </textarea><br>
                        </p>
                    </div>
                </div>
                <div class="card col-md-8 mt-5" style="border-style: none">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                        @foreach ($pieces as $key=>$piece)    
                            @if($key==0)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset("storage/fichiers/$piece->anp_fichier") }}" alt="First slide">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset("storage/fichiers/$piece->anp_fichier") }}" alt="First slide">
                                </div>
                            @endif
                        @endforeach
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
        </div>
    
</div>

@endsection