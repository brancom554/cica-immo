@extends('layout')
@section('content')
    {{-- <style>
      
    </style>
    <div class="filter-search" align="center">
        <div class="container col-md-12 ">
            <form class="filter-form">
                <input type="text" placeholder="Entrer un motif de recherche">
                <button class="site-btn fs-submit">Chercher</button>
            </form>
        </div>
    </div> --}}

    <style>
        .perso{
            cursor: pointer;
        }
        .perso:hover
        {
            border: 1px solid white!important;
            color:white!important;
            background-color:#30CAA0!important;
        }
    </style>

    <section class="properties-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Annonce : <span style="color: #30CAA0;">{{ $annonces[0]->annonce_titre }}</span></h3>
            </div>
            <div class="row">
                <div class="card col-md-8" style="border-style:none;">
                    <div class="card-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
    
                            @foreach ($annonces as $key=>$piece)    
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
                <div class="card col-md-4" style="border-style:none;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#30CAA0;">Informations</h5>
                        <p class="card-text m-4">
                            <input class="form-control bg-transparent mt-2 perso" style="border-style:none" readonly value="{{ 'Libelle : '.$annonces[0]->annonce_titre }}"><br>
                            <input class="form-control bg-transparent perso" style="border-style:none" readonly value="{{ 'Type d\'annonce : '.$annonces[0]->annonce_type }}"><br>
                            <input class="form-control bg-transparent perso" style="border-style:none" readonly value="{{ 'Côut : '.$annonces[0]->annonce_cout }} XOF"><br>
                            <input class="form-control bg-transparent perso" style="border-style:none" readonly value="{{ 'Contact : '.$annonces[0]->annonce_contact }}"><br>
                            <textarea cols="20" rows="11" style="border-style:none" class="form-control bg-transparent perso" readonly>Description : {{ $annonces[0]->annonce_description }}
                            </textarea>
                        </p>
                    </div>
                </div>
                {{-- @foreach ($annonces as $annonce)
                    <div class="col-md-6">
                        <div class="propertie-item set-bg" data-setbg="{{ asset("storage/fichiers/$annonce->anp_fichier") }}">
                            <div class="sale-notic">{{ strtoupper($annonce->annonce_type) }}</div>
                            <div class="propertie-info text-white">
                                <div class="info-warp">
                                    <h5>{{ $annonce->annonce_titre }}</h5>
                                    <p><i class="fa fa"></i>{{ $annonce->annonce_cout }} XOF</p>
                                </div>
                                <div class="price btn">Détails</div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
            <div class="row justify-content-center">
                <a href="/pay/{{ $annonces[0]->annonce_id }}" class="m-5 btn-lg btn " style="background-color: #30CAA0;color:white;" ><i class="fa fa-dollar"></i>&nbsp;&nbsp;Réserver / Acheter </a>
                <button class="m-5 btn-lg btn btn-info" data-toggle="modal" data-target="#contact"><i class="fa fa-phone"></i>&nbsp;&nbsp;Entrer en contact </button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" enctype="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Entrer en contact</h5>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="catname">Nom prenoms *</label>
                            <input type="text" name="pay_name" id="pay_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="catname">Contact *</label>
                            <input type="text" name="livePrivateKey" id="livePrivateKey" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="catname">Email *</label>
                            <input type="text" name="livePrivateKey" id="livePrivateKey" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="catname">Message </label>
                            <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Fermer</button>
                        <button type="button" id="submitBtn" onclick="contactUs()" style="background-color: #30CAA0;color:white;" class="btn btn-success waves-effect waves-light">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="clients-section">
        <div class="container">
            <div class="clients-slider owl-carousel">
                <a href="#">
                    <img src="{{ asset('img/partner/1.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('img/partner/2.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('img/partner/3.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('img/partner/4.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('img/partner/5.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>

@endsection