<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="border-bottom: 1px solid rgb(66, 66, 66);">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('trips.index') }}">Wycieczki Górskie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('trips.index') }}">Wycieczki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('country.index') }}">Kraje</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Wyloguj się
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Zaloguj się</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
