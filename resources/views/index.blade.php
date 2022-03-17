@extends('layout')
@section('content')

    <div class="filter-search" align="center">
        <div class="container col-md-12 ">
            <form class="filter-form">
                <input type="text" placeholder="Entrer un motif de recherche">
                <button class="site-btn fs-submit">Chercher</button>
            </form>
        </div>
    </div>

    <section class="properties-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Dernières annonces</h3>
                <p>Découvrez les dernières propriétés publier sur notre plateforme</p>
            </div>
            <div class="row">
                @foreach ($annonces as $annonce)
                    <div class="col-md-6">
                        <div class="propertie-item set-bg" data-setbg="{{ asset("storage/fichiers/$annonce->anp_fichier") }}">
                            <div class="sale-notic">{{ strtoupper($annonce->annonce_type) }}</div>
                            <div class="propertie-info text-white">
                                <div class="info-warp">
                                    <h5>{{ $annonce->annonce_titre }}</h5>
                                    <p><i class="fa fa"></i>{{ $annonce->annonce_cout }} XOF</p>
                                </div>
                                <a href="/viewDetails/{{ $annonce->annonce_id }}" class="price btn">Détails</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="img/service.jpg" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1 pl-lg-0">
                    <div class="section-title text-white">
                        <h3>Nos services</h3>
                        <p>We provide the perfect service for </p>
                    </div>
                    <div class="services">
                        <div class="service-item">
                            <i class="fa fa-comments"></i>
                            <div class="service-text">
                                <h5>Consultant Service</h5>
                                <p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <i class="fa fa-home"></i>
                            <div class="service-text">
                                <h5>Properties Management</h5>
                                <p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <i class="fa fa-briefcase"></i>
                            <div class="service-text">
                                <h5>Renting and Selling</h5>
                                <p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  <section class="feature-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Liste des annonces</h3>
                <p>Parcourir les maisons et appartements à vendre et à louer dans votre région</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/1.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>1963 S Crescent Heights Blvd</h5>
                                <p><i class="fa fa-map-marker"></i> Los Angeles, CA 90034</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 800 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 10 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 6 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Tony Holland</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,200,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/2.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>305 North Palm Drive</h5>
                                <p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 1500 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Gina Wesley</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$4,500,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/3.jpg">
                            <div class="rent-notic">FOR Rent</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>305 North Palm Drive</h5>
                                <p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 1500 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Gina Wesley</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$2,500/month</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/4.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>28 Quaker Ridge Road, Manhasset</h5>
                                <p><i class="fa fa-map-marker"></i> 28 Quaker Ridge Road, Manhasset</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 1200 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 12 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 3 Garages</p>
                                        <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Sasha Gordon </p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$5,600,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/5.jpg">
                            <div class="rent-notic">FOR Rent</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>Sofi Berryessa 750 N King Road</h5>
                                <p><i class="fa fa-map-marker"></i> San Jose, CA 95133</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 500 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 4 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 1 Garages</p>
                                        <p><i class="fa fa-bath"></i> 2 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Gina Wesley</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,600/month</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/6.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>1203 Orren Street, Northeast</h5>
                                <p><i class="fa fa-map-marker"></i> Washington, DC 20002</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 700 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 7 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 1 Garages</p>
                                        <p><i class="fa fa-bath"></i> 7 Bathrooms</p>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Sasha Gordon </p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 8 days ago</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,600,000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
    {{-- <section class="feature-category-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>LOOKING PROPERTY</h3>
                <p>What kind of property are you looking for? We will help you</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 f-cata">
                    <img src="img/feature-cate/1.jpg" alt="">
                    <h5>Apartment for rent</h5>
                </div>
                <div class="col-lg-3 col-md-6 f-cata">
                    <img src="img/feature-cate/2.jpg" alt="">
                    <h5>Family Home</h5>
                </div>
                <div class="col-lg-3 col-md-6 f-cata">
                    <img src="img/feature-cate/3.jpg" alt="">
                    <h5>Resort Villas</h5>
                </div>
                <div class="col-lg-3 col-md-6 f-cata">
                    <img src="img/feature-cate/4.jpg" alt="">
                    <h5>Office Building</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Popular Places</h3>
                <p>We understand the value and importance of place</p>
            </div>
            <div class="gallery">
                <div class="grid-sizer"></div>
                <a href="#" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg">
                    <div class="gi-info">
                        <h3>New York</h3>
                        <p>118 Properties</p>
                    </div>
                </a>
                <a href="#" class="gallery-item grid-wide set-bg" data-setbg="img/gallery/2.jpg">
                    <div class="gi-info">
                        <h3>Florida</h3>
                        <p>112 Properties</p>
                    </div>
                </a>
                <a href="#" class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
                    <div class="gi-info">
                        <h3>San Jose</h3>
                        <p>72 Properties</p>
                    </div>
                </a>
                <a href="#" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg">
                    <div class="gi-info">
                        <h3>St Louis</h3>
                        <p>50 Properties</p>
                    </div>
                </a>

            </div>
        </div>
    </section> --}}
    {{-- <section class="review-section set-bg" data-setbg="img/review-bg.jpg">
        <div class="container">
            <div class="review-slider owl-carousel">
                <div class="review-item text-white">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
                    <h5>Stacy Mc Neeley</h5>
                    <span>CEP’s Director</span>
                    <div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
                </div>
                <div class="review-item text-white">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
                    <h5>Stacy Mc Neeley</h5>
                    <span>CEP’s Director</span>
                    <div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
                </div>
                <div class="review-item text-white">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
                    <h5>Stacy Mc Neeley</h5>
                    <span>CEP’s Director</span>
                    <div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>LATEST NEWS</h3>
                <p>Real estate news headlines around the world.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 blog-item">
                    <img src="img/blog/1.jpg" alt="">
                    <h5><a href="single-blog.html">Housing confidence hits record high as prices skyrocket</a></h5>
                    <div class="blog-meta">
                        <span><i class="fa fa-user"></i>Amanda Seyfried</span>
                        <span><i class="fa fa-clock-o"></i>25 Jun 201</span>
                    </div>
                    <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
                </div>
                <div class="col-lg-4 col-md-6 blog-item">
                    <img src="img/blog/2.jpg" alt="">
                    <h5><a href="single-blog.html">Taylor Swift is selling her $2.95 million Beverly Hills mansion</a></h5>
                    <div class="blog-meta">
                        <span><i class="fa fa-user"></i>Amanda Seyfried</span>
                        <span><i class="fa fa-clock-o"></i>25 Jun 201</span>
                    </div>
                    <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
                </div>
                <div class="col-lg-4 col-md-6 blog-item">
                    <img src="img/blog/3.jpg" alt="">
                    <h5><a href="single-blog.html">NYC luxury housing market saturated with inventory, says celebrity realtor</a></h5>
                    <div class="blog-meta">
                        <span><i class="fa fa-user"></i>Amanda Seyfried</span>
                        <span><i class="fa fa-clock-o"></i>25 Jun 201</span>
                    </div>
                    <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
                </div>
            </div>
        </div>
    </section> --}}
    <div class="clients-section">
        <div class="container">
            <div class="clients-slider owl-carousel">
                <a href="#">
                    <img src="img/partner/1.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/2.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/3.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/4.png" alt="">
                </a>
                <a href="#">
                    <img src="img/partner/5.png" alt="">
                </a>
            </div>
        </div>
    </div>

@endsection