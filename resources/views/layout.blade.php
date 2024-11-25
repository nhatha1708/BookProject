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
    <!-- Header -->
    <header>
        <nav
            class="bg-white flex flex-row justify-between items-center px-6 py-3 fixed top-0 left-0 right-0 z-50 shadow-md">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}" class="text-3xl font-bold">
                    <img src="{{ asset('resource/logo2.jpg') }}" alt="Logo" class="h-14 w-14">
                </a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-green-500 transition-all duration-300">Home</a>
                <a href="{{ url('/new_booklist') }}" class="text-gray-700 hover:text-green-500 transition-all duration-300">Books</a>
                <div class="relative group">
                    <!-- Dropdown Trigger -->
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-green-500 transition-all">
                        Categories
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="hidden group-hover:block absolute bg-white shadow-lg rounded-lg w-48">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Modern Literature</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Classic Literature</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Children's Literature</a>
                    </div>
                </div>
                <a href="#authors" id="scrollToAuthors" class="text-gray-700 hover:text-green-500 transition-all">Author</a>
                <a href="{{ url('/aboutUs') }}" class="text-gray-700 hover:text-green-500 transition-all">About Us</a>
            </div>
            <!-- Search & Cart -->
            <div class="flex items-center space-x-4">
                <div class="relative group">
                    <form name="search" onsubmit="event.preventDefault(); performSearch();" class="relative">
                        <input type="text" name="txt" placeholder="Search..." onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Search...'"
                            class="w-10 h-10 border-4 border-white rounded-full bg-transparent outline-none transition-all duration-500 ease-in-out group-hover:w-[250px] group-hover:bg-white group-hover:border-green-500 text-black placeholder:text-gray-500 px-5 font-comic-sans text-lg">
                        <button type="submit"
                            class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white-500 group-hover:opacity-0 group-hover:-z-10 transition-opacity duration-200 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                        </button>
                    </form>
                </div>
                <a href="{{ url('/cart') }}" class="text-gray-700 hover:text-green-500">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i>
                </a>
                <a href="{{ url('/userpage') }}" class="text-gray-700 hover:text-green-500">
                    <i class="fa-solid fa-circle-user text-2xl"></i>
                </a>
            </div>
            <!-- Hamburger Menu -->
            <button id="hamburgerBtn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg mt-2">
            <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-700 hover:text-green-500">Home</a>
            <a href="{{ url('/new_booklist') }}" class="block px-4 py-2 text-gray-700 hover:text-green-500">Books</a>
            <button id="mobileDropdownBtn"
                class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-green-500">
                Categories
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div id="mobileDropdownMenu" class="hidden pl-6">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-500">Modern Literature</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-500">Classic Literature</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-500">Children's Literature</a>
            </div>
            <a href="{{ url('/aboutUs') }}" class="block px-4 py-2 text-gray-700 hover:text-green-500">About Us</a>
        </div>
    </header>

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
