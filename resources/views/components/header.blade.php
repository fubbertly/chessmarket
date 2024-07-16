<header class="flex justify-between items-center py-4 bg-white shadow-md">
    <!-- Logo and Title -->
    <a href="/" class="flex items-center text-gray-700 hover:text-gray-900">
        <h1 class="text-2xl font-bold ml-4">Chess</h1>
        <img src="https://www.svgviewer.dev/static-svgs/453146/chess-pawn.svg" alt="Chess Piece Pack" class="h-11 object-cover">
        <h1 class="text-2xl font-bold">Market</h1>
    </a>

    <!-- Navigation Links -->
    <nav class="space-x-4">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-1xl font-bold mr-4">Dashboard</a>
        @else
        <div class="mr-3">
            <a href="{{ route('login') }}" class="text-1xl font-bold mr-4">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-1xl font-bold">Register</a>
            @endif
        </div>
        @endauth
    </nav>
</header>
