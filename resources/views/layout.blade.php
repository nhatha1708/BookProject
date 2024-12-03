<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EchoLibrary')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons.min.js"></script>
    <style>
        #mobileMenu a,
        #mobileDropdownMenu a {
            transition: background 0.3s, color 0.3s;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-gray-100">
    <!-- Main Content -->
    <main class="mt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-text border-t border-accent">
        <div class="w-full mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4">
                <!-- Logo -->
                <div class="flex flex-col items-center justify-center text-center md:items-center">
                    <img src="{{ asset('resource/logo2.jpg') }}" loading="lazy" alt="Logo" class="h-16 mb-2">
                    <p>Your gateway to a world of books. Discover, Read, and Grow with EchoLibrary.</p>
                </div>
                <!-- Navigation Links -->
                <div class="mt-2 text-center">
                    <h3 class="font-semibold text-lg">Navigation</h3>
                    <ul>
                        <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ url('/aboutUs') }}" class="hover:underline">About Us</a></li>
                        <li><a href="#" class="hover:underline">Services</a></li>
                        <li><a href="#" class="hover:underline">Contact</a></li>
                    </ul>
                </div>
                <!-- Customer Service -->
                <div class="mt-2 text-center">
                    <h3 class="font-semibold text-lg">Customer Service</h3>
                    <ul>
                        <li><a href="#" class="hover:underline">Help Center</a></li>
                        <li><a href="#" class="hover:underline">Returns</a></li>
                        <li><a href="#" class="hover:underline">Shipping</a></li>
                        <li><a href="#" class="hover:underline">Gift Cards</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
