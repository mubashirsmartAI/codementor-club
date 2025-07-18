<nav class="navbar navbar-expand-lg" style="background: #0a2540;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <span style="font-weight:700; color:white; font-size:1.25rem; letter-spacing:-1px;">Codementor <span style="color:#00c6d7;">Club</span></span>
        </a>
        <!-- Hamburger -->
        <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse show" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-2">
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('search') }}">Search Talent</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('ai-agents') }}">AI Agents</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('engineers') }}">Engineers</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('training') }}">Training</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('membership') }}">Membership</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('process') }}">Process</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('solutions') }}">Solutions</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('book-call') }}">Book a Call</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('pricing') }}">Pricing</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold px-3" href="{{ route('refer') }}">Refer a Friend</a></li>
            </ul>
        </div>
    </div>
</nav>
<style>
.navbar-nav .nav-link {
    transition: color .2s, background .2s, border-radius .2s;
    border-radius: 0.5rem;
}
.navbar-nav .nav-link:hover, .navbar-nav .nav-link:focus {
    color: #0a2540 !important;
    background: #00c6d7;
}
.navbar-nav .nav-link.active, .navbar-nav .nav-link[aria-current="page"] {
    color: #fff !important;
    background: #00c6d7;
}
.navbar-toggler {
    border: none;
}
.navbar-toggler:focus {
    box-shadow: none;
}
</style>
