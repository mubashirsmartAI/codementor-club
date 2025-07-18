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
        <footer class="bg-gray-900 text-white mt-12">
            <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-2xl font-bold text-blue-400">CM</span>
                        <span class="font-semibold text-lg">Codementor Club</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-4">Build MVPs faster with top engineers and AI agents. Your partner for rapid product development.</p>
                    <div class="flex gap-3">
                        <a href="#" class="hover:text-blue-400"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.56v14.91a4.56 4.56 0 0 1-4.56 4.56H4.56A4.56 4.56 0 0 1 0 19.47V4.56A4.56 4.56 0 0 1 4.56 0h14.91A4.56 4.56 0 0 1 24 4.56zM8.09 19.47V9.29H4.56v10.18h3.53zm-1.77-11.5a2.05 2.05 0 1 1 0-4.1 2.05 2.05 0 0 1 0 4.1zm15.18 11.5v-5.6c0-3.36-1.79-4.93-4.18-4.93-1.93 0-2.8 1.07-3.28 1.82v-1.56h-3.53c.05 1.03 0 10.18 0 10.18h3.53v-5.68c0-.3.02-.6.11-.82.24-.6.79-1.22 1.71-1.22 1.21 0 1.7.92 1.7 2.27v5.45h3.53z"/></svg></a>
                        <a href="#" class="hover:text-blue-400"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.56v14.91a4.56 4.56 0 0 1-4.56 4.56H4.56A4.56 4.56 0 0 1 0 19.47V4.56A4.56 4.56 0 0 1 4.56 0h14.91A4.56 4.56 0 0 1 24 4.56zM8.09 19.47V9.29H4.56v10.18h3.53zm-1.77-11.5a2.05 2.05 0 1 1 0-4.1 2.05 2.05 0 0 1 0 4.1zm15.18 11.5v-5.6c0-3.36-1.79-4.93-4.18-4.93-1.93 0-2.8 1.07-3.28 1.82v-1.56h-3.53c.05 1.03 0 10.18 0 10.18h3.53v-5.68c0-.3.02-.6.11-.82.24-.6.79-1.22 1.71-1.22 1.21 0 1.7.92 1.7 2.27v5.45h3.53z"/></svg></a>
                        <a href="#" class="hover:text-blue-400"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.56v14.91a4.56 4.56 0 0 1-4.56 4.56H4.56A4.56 4.56 0 0 1 0 19.47V4.56A4.56 4.56 0 0 1 4.56 0h14.91A4.56 4.56 0 0 1 24 4.56zM8.09 19.47V9.29H4.56v10.18h3.53zm-1.77-11.5a2.05 2.05 0 1 1 0-4.1 2.05 2.05 0 0 1 0 4.1zm15.18 11.5v-5.6c0-3.36-1.79-4.93-4.18-4.93-1.93 0-2.8 1.07-3.28 1.82v-1.56h-3.53c.05 1.03 0 10.18 0 10.18h3.53v-5.68c0-.3.02-.6.11-.82.24-.6.79-1.22 1.71-1.22 1.21 0 1.7.92 1.7 2.27v5.45h3.53z"/></svg></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Navigation</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-400">Home</a></li>
                        <li><a href="{{ route('search') }}" class="hover:text-blue-400">Search Talent</a></li>
                        <li><a href="{{ route('ai-agents') }}" class="hover:text-blue-400">AI Agents</a></li>
                        <li><a href="{{ route('engineers') }}" class="hover:text-blue-400">Engineers</a></li>
                        <li><a href="{{ route('training') }}" class="hover:text-blue-400">Training</a></li>
                        <li><a href="{{ route('membership') }}" class="hover:text-blue-400">Membership</a></li>
                        <li><a href="{{ route('process') }}" class="hover:text-blue-400">Process</a></li>
                        <li><a href="{{ route('solutions') }}" class="hover:text-blue-400">Solutions</a></li>
                        <li><a href="{{ route('book-call') }}" class="hover:text-blue-400">Book a Call</a></li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-blue-400">Pricing</a></li>
                        <li><a href="{{ route('refer') }}" class="hover:text-blue-400">Refer a Friend</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Contact</h4>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li>Email: <a href="mailto:info@codementorclub.com" class="hover:text-blue-400">info@codementorclub.com</a></li>
                        <li>Phone: <a href="tel:+1234567890" class="hover:text-blue-400">+1 234 567 890</a></li>
                        <li>Address: 123 Startup Lane, Tech City</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Newsletter</h4>
                    <form class="flex flex-col gap-2">
                        <input type="email" placeholder="Your email address" class="px-3 py-2 rounded bg-gray-800 text-white placeholder-gray-400 focus:outline-none">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white rounded px-3 py-2 font-semibold">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="text-center text-gray-500 text-xs py-4 border-t border-gray-800">&copy; {{ date('Y') }} Codementor Club. All rights reserved.</div>
        </footer>
        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
