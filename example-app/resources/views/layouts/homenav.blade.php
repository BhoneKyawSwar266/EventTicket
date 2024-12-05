{{-- resources/views/layouts/homenav.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <strong>My Navbar</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/events') }}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/entertainment/events')}}">Entertainment</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{url('/business_and_professional/events')}}">Business and Professional</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{url('/community_and_culture/events')}}">Community and Culture</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{url('/education/events')}}">Education</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{url('/technology/events')}}">Technology</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{url('/health_and_wellness/events')}}">Health and Wellness</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{url('/others/events')}}">Others</a></li>
                    </ul>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="d-flex align-items-center">
                    @auth
                        @php
                            $dashboardRoute = match (auth()->user()->role) {
                                'admin' => route('admin.dashboard'),
                                'organizer' => route('organizer.dashboard'),
                                'user' => route('user.dashboard'),
                                default => route('welcome'),
                            };
                        @endphp
                        <a href="{{ $dashboardRoute }}" class="btn btn-primary me-2">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
