<x-master title="index taxi">

    <section class="inner-banner py-5">
        <div class="container pt-5 pb-sm-4 pb-2">
            <h4 class="inner-text-title font-weight-bold pt-5">Dashboard</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Dashboard</li>
            </ul>
        </div>
    </section>

    <section class="w3l-breadcrumb py-lg-5">
        <div class="container mb-5 mt-5">
            <form action="{{ route('search') }}" method="POST" class="form-search d-flex mb-3">
                @csrf
                <input type="search" class="form-control px-4" name="search" id="search"
                    placeholder="You can search at RECETTES here" />
                <button type="submit" class="btn btn-style mt-1">Search</button>
            </form>
        </div>
    </section>

    <h1>All Taxi</h1>

    <div class="w3l-grids-block-5 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h5>What We Offer</h5>
                <h3 class="title-style">Our car</h3>
            </div>
            <main>
                <h1 class="visually-hidden">Sidebars examples</h1>
              
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4">Sidebar</span>
                  </a>
                  <hr>
                  <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                      <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                        Home
                      </a>
                    </li>
                    <li>
                      <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                        Dashboard
                      </a>
                    </li>
                    <li>
                      <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                        Orders
                      </a>
                    </li>
                    <li>
                      <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                        Products
                      </a>
                    </li>
                    <li>
                      <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Customers
                      </a>
                    </li>
                  </ul>
                  <hr>
                  <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                      <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                      <li><a class="dropdown-item" href="#">New project...</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                  </div>
                </div>
            </main>
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
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-style mt-1"
                                            href="{{ route('recettes.edit', $recette) }}">Edit</a>
                                    </div>
                                    <div class="col">
                                        <form method="post" action="{{ route('recettes.destroy', $recette) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="delete btn btn-style mt-1" value="Delete">
                                        </form>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-style mt-1"
                                            href="{{ route('showOne', ['id' => $recette->id]) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-md-12">
                        <h1>no car</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>


    {{-- 
        @forelse ($recettes as $recette)

        <div class="row text-center justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="servicecard-single">
                    <div class="grids5-info position-relative">
                        <img src="/storage/app/public/{{$recette->image}}" alt="{{$recette->image}}" class="img-fluid" />
                    </div>
                    <div class="content-main-top">
                        <h4><a>{{$recette->name}}</a></h4>
                        <p>{{$recette->description}} </p>
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-style mt-1" href="{{ route('recettes.edit', $recette) }}">Edit</a>
                            </div>
                            <div class="col">
                                <form method="post" action="{{ route('recettes.destroy', $recette) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="delete btn btn-style mt-1" value="Delete">
                                </form>
                            </div>
                            <div class="col">
                                <a class="btn btn-style mt-1" href="{{ route('showOne', ['id' => $recette->id]) }}">Read More</a>
                            </div>
                        </div>
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
</div> --}}

</x-master>
