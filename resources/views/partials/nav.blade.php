@once
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand active" href="{{ route('homePage') }}"><span>MonGrand</span>Taxi <i class="fas fa-taxi"></i></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                @auth
                    @if (auth()->user()->role === 'passager')
                        <li class="nav-item">
                            <a href="{{ route('profiles.show', auth()->user()->id) }}" class="btn nav-link">Profile passager</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn nav-link" href="{{ route('publications.create') }}">Créer une passage</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn nav-link" href="{{ route('chauffeurs.create') }}">Créer nouvelle voiture</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profiles.show', auth()->user()->id) }}" class="btn nav-link">Profile
                                chauffeurs</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.logout') }}">Déconnection</a>
                    </li>
                @endauth
            </ul>
            @guest
                <a class="btn btn-style" href="{{ route('login') }}">login</a>
            @endguest
        </div>
        <div class="cont-ser-position">
            <nav class="navigation">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox">
                        <div class="mode-container">
                            <i class="gg-sun"></i>
                            <i class="gg-moon"></i>
                        </div>
                    </label>
                </div>
            </nav>
        </div>
    </nav>
@endonce
