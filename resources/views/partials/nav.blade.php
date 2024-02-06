@once
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand active" href="{{ route('homePage') }}"><span>MonGrand</span>Taxi<i
                class="fas fa-hands-wash"></i></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('add') }}">Add chefoure</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show') }}">Dashboard</a>
                </li>
                <li>
                </li>
            </ul>
            <a class="btn btn-style" href="{{ route('login') }}">login</a>

        </div>
        <!-- toggle switch for light and dark theme -->
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
        <!-- //toggle switch for light and dark theme -->
    </nav>
@endonce
