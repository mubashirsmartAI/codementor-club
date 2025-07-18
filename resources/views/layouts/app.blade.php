<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <!-- Google Fonts: Inter and Plus Jakarta Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body style="font-family: 'Inter', 'Plus Jakarta Sans', Arial, sans-serif;" class="antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
        <!-- Footer -->
        <footer class="bg-dark text-white mt-5 pt-5 pb-3">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <span style="font-weight:700; color:white; font-size:1.25rem; letter-spacing:-1px;">Codementor <span style="color:#00c6d7;">Club</span></span>
                        </div>
                        <p class="text-white-50 small mb-3">Build MVPs faster with top engineers and AI agents. Your partner for rapid product development.</p>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-white-50 fs-5"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-white-50 fs-5"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-white-50 fs-5"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h6 class="fw-bold mb-3">Navigation</h6>
                        <ul class="list-unstyled text-white-50 small">
                            <li><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></li>
                            <li><a href="{{ route('search') }}" class="text-white-50 text-decoration-none">Search Talent</a></li>
                            <li><a href="{{ route('ai-agents') }}" class="text-white-50 text-decoration-none">AI Agents</a></li>
                            <li><a href="{{ route('engineers') }}" class="text-white-50 text-decoration-none">Engineers</a></li>
                            <li><a href="{{ route('training') }}" class="text-white-50 text-decoration-none">Training</a></li>
                            <li><a href="{{ route('membership') }}" class="text-white-50 text-decoration-none">Membership</a></li>
                            <li><a href="{{ route('process') }}" class="text-white-50 text-decoration-none">Process</a></li>
                            <li><a href="{{ route('solutions') }}" class="text-white-50 text-decoration-none">Solutions</a></li>
                            <li><a href="{{ route('book-call') }}" class="text-white-50 text-decoration-none">Book a Call</a></li>
                            <li><a href="{{ route('pricing') }}" class="text-white-50 text-decoration-none">Pricing</a></li>
                            <li><a href="{{ route('refer') }}" class="text-white-50 text-decoration-none">Refer a Friend</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 class="fw-bold mb-3">Contact</h6>
                        <ul class="list-unstyled text-white-50 small">
                            <li>Email: <a href="mailto:info@codementorclub.com" class="text-white-50 text-decoration-none">info@codementorclub.com</a></li>
                            <li>Phone: <a href="tel:+1234567890" class="text-white-50 text-decoration-none">+1 234 567 890</a></li>
                            <li>Address: 123 Startup Lane, Tech City</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 class="fw-bold mb-3">Newsletter</h6>
                        <form class="d-flex flex-column gap-2">
                            <input type="email" placeholder="Your email address" class="form-control form-control-sm bg-secondary text-white border-0">
                            <button type="submit" class="btn btn-info btn-sm text-white">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="text-center text-white-50 small pt-4 mt-4 border-top border-secondary">&copy; {{ date('Y') }} Codementor Club. All rights reserved.</div>
            </div>
        </footer>
        <!-- Scroll to Top Button -->
        <button id="scrollToTopBtn" type="button" class="btn btn-info btn-lg text-white shadow" style="position: fixed; bottom: 32px; right: 32px; z-index: 1050; border-radius: 50%; width:56px; height:56px; display:none; align-items:center; justify-content:center;">
            <i class="bi bi-arrow-up" style="font-size:1.5rem;"></i>
        </button>
        <script>
        // Show/hide button on scroll
        window.addEventListener('scroll', function() {
            const btn = document.getElementById('scrollToTopBtn');
            if (window.scrollY > 300) {
                btn.style.display = 'flex';
            } else {
                btn.style.display = 'none';
            }
        });
        // Smooth scroll to top
        document.getElementById('scrollToTopBtn').onclick = function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
        </script>
        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
