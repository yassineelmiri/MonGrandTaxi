<x-master title="Page Home">


    <section class="banner-19">
        <div class="banner-layer">
            <img id="myVideo" src="assets/images/Capture6_PNG.png" alt="#">
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <h4>Laundry & Our TAXI</h4>
                        <p class="mt-3">Irferendis repudandae fugia rchitecto beatae rederit svitae recusa ndae
                            debitifacere uiimi placeat maxienui </p>
                        <a href="#f" class="btn btn-style mt-md-5 mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section   class="mx-1 mb-5 fcpol"> --}}
    {{-- 
        <div class="container mb-5 mt-5">
            <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <form action="{{ route('search') }}" method="POST" class="form-search d-flex mb-3">
                    @csrf
                <input type="search" class="form-control px-4" name="search" id="search" placeholder="You can search at RECETTES here" />
                <button type="submit"  class="btn btn-primary">Search</button>
                </form>
            </div>
            </div>
        </div> --}}


    <section class="w3l-bottom-grids-6 py-5">
        <div class="container pt-lg-5 pt-md-4 pt-2">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="area-box">
                        <i class="fas fa-stopwatch-20"></i>
                        <h4><a href="about.html" class="title-head">Save Time and Money</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed et dolor amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-comments-dollar"></i>
                        <h4><a href="about.html" class="title-head">Pay Online in Seconds</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-thumbs-up"></i>
                        <h4><a href="about.html" class="title-head">Satisfaction Guarantee</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-about-2 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row justify-content-between align-items-center pb-lg-5">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-5">
                    <div class="image-box inverse position-relative">
                        <div class="image-box__static">
                            <img src="assets/images/delicieux-burger-ingredients-frais.jpg" alt=""
                                width="364" height="459">
                        </div>
                        <div class="image-box__float">
                            <img src="assets/images/salade-fruits-renversee-sol-etait-gachis-couleurs-textures-vibrantes-generative-ai.jpg"
                                alt="" width="364" height="459">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-2-secs-left ps-lg-5 mt-lg-4 mt-5">
                    <h5 class="sub-title">More than 25 Years of Experience</h5>
                    <h3 class="title-style">Deliciousness jumping into the mouth</h3>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum
                        deleniti similique sunt in culpa qui officia</p>
                    <ul class="mt-4 list-style-lis">
                        <li><i class="fas fa-check-circle"></i>100% Customer Satisfaction</li>
                        <li><i class="fas fa-check-circle"></i>Free Collection & Delivery</li>
                        <li><i class="fas fa-check-circle"></i>Affordable Prices</li>
                    </ul>
                    <a href="about.html" class="btn btn-style mt-5">Discover More</a>
                </div>
            </div>
        </div>
    </section>


    <div class="w3l-grids-block-5 pb-5 pt-md-2 pt-4">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h5>What We Offer</h5>
                <h3 class="title-style">Our taxi</h3>
            </div>
            <div class="row text-center justify-content-center">
                @forelse ($recettes as $recette)
                    <div class="col-lg-4 col-md-6">
                        <div class="servicecard-single">
                            <div class="grids5-info position-relative">

                                <img src="storage/{{ $recette->image }}" alt="{{ $recette->image }}" class=""
                                    height="400px">
                            </div>
                            <div class="content-main-top">
                                <h4><a href="services.html">{{ $recette->name }}</a></h4>
                                <p>{{ $recette->description }}</p>
                                <a class="btn btn-style mt-4" href="{{ route('showOne', ['id' => $recette->id]) }}">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-md-12">
                        <h1>no care</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>

    <section class="w3l-call-to-action-6 py-4">
        <div class="container py-md-5 py-sm-4 py-4">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="col-lg-7 left-content-call pe-lg-2">
                    <h3 class="title-big">Quality Service with
                        Free Collection & Delivery</h3>
                </div>
                <div class="col-lg-5 right-content-call mt-lg-0 mt-4">
                    <ul class="buttons d-sm-flex align-items-center justify-content-end">
                        <li class="phone-sec me-xl-4 me-lg-0 me-sm-4"><i class="fas fa-phone-volume"></i>
                            <a class="call-style-w3" href="tel:+1(23) 456 789 0000">+(212)6 14 23 23 58</a>
                        </li>
                        <li><a href="mailto:youcode@gmail.com" class="btn btn-style mt-sm-0 mt-3">Order Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{--     
    <h1 class="mx-5 mb-5 kilua">LAST RACETTES:</h1>

    <div class="row">
        @forelse ($recettes as $recette)
            <div class="col-md-4 mb-4 wikis">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$recette->name}}</h5>
                        <img src="/storage/{{$recette->image}}" alt="{{$recette->image}}" class="img-fluid w-100 rounded-3">
                        <p class="card-text">{{$recette->description}}<br></p>
                        <p class="card-text">choumicha</p>
                        <div class="specs"></div>
                        <div class="card-footer">
                            <a class="showw " href="{{ route('showOne', ['id' => $recette->id]) }}">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <h1>no recettes</h1>
            </div>
        @endforelse
    </div>
    </section> --}}


    
</x-master>
