<nav class="bg-white border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <span class="text-2xl font-bold text-blue-600">CM</span>
                    <span class="font-semibold text-gray-800 text-lg hidden sm:inline">Codementor Club</span>
                </a>
            </div>
            <!-- Main Nav Links -->
            <div class="hidden md:flex gap-6 items-center">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="{{ route('search') }}" class="text-gray-700 hover:text-blue-600 font-medium">Search Talent</a>
                <a href="{{ route('ai-agents') }}" class="text-gray-700 hover:text-blue-600 font-medium">AI Agents</a>
                <a href="{{ route('engineers') }}" class="text-gray-700 hover:text-blue-600 font-medium">Engineers</a>
                <a href="{{ route('training') }}" class="text-gray-700 hover:text-blue-600 font-medium">Training</a>
                <a href="{{ route('membership') }}" class="text-gray-700 hover:text-blue-600 font-medium">Membership</a>
                <a href="{{ route('process') }}" class="text-gray-700 hover:text-blue-600 font-medium">Process</a>
                <a href="{{ route('solutions') }}" class="text-gray-700 hover:text-blue-600 font-medium">Solutions</a>
                <a href="{{ route('book-call') }}" class="text-gray-700 hover:text-blue-600 font-medium">Book a Call</a>
                <a href="{{ route('pricing') }}" class="text-gray-700 hover:text-blue-600 font-medium">Pricing</a>
                <a href="{{ route('refer') }}" class="text-gray-700 hover:text-blue-600 font-medium">Refer a Friend</a>
            </div>
            <!-- Mobile Hamburger -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 bg-white border-b border-gray-100">
        <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Home</a>
        <a href="{{ route('search') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Search Talent</a>
        <a href="{{ route('ai-agents') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">AI Agents</a>
        <a href="{{ route('engineers') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Engineers</a>
        <a href="{{ route('training') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Training</a>
        <a href="{{ route('membership') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Membership</a>
        <a href="{{ route('process') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Process</a>
        <a href="{{ route('solutions') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Solutions</a>
        <a href="{{ route('book-call') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Book a Call</a>
        <a href="{{ route('pricing') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Pricing</a>
        <a href="{{ route('refer') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Refer a Friend</a>
    </div>
    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</nav>
