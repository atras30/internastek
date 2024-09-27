<header class="bg-gray-800 text-white py-4 px-8 h-16 absolute right-0 top-0 left-0 hidden lg:block">
    <nav class="container mx-auto flex justify-between items-center">
        <div class="text-xl font-bold">
            <a href="/" class="hover:text-gray-400">Internastek</a>
        </div>
        <ul class="flex space-x-4">
            <li>
                <a href="{{ route('home') }}" class="hover:text-gray-400">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}"  class="hover:text-gray-400">About Us</a>
            </li>
            <li>
                <a href="{{ route('partnerships') }}" class="hover:text-gray-400">Partnership</a>
            </li>
            <li>
                <a href="{{ route('reviews') }}" class="hover:text-gray-400">Reviews</a>
            </li>
            <li>
                <a href="{{ route('openingHours') }}" class="hover:text-gray-400">Opening Hours</a>
            </li>
            <li>
                <a href="{{ route('contactUs') }}" class="hover:text-gray-400">Contact Us</a>
            </li>
        </ul>
    </nav>
</header>

{{-- Mobil Navbar --}}
<nav class="bg-gray-800 p-4 lg:hidden">
    <div class="container mx-auto flex justify-between items-start">
        <!-- Logo -->
        <div class="text-white text-lg font-semibold">MyLogo</div>

        <div class="flex flex-col">
            <!-- Hamburger Menu (Mobile) -->
            <div class="lg:hidden flex justify-end">
                <button id="menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Navbar Links -->
            <div id="menu" class="lg:flex lg:flex-row lg:items-center lg:space-x-6 hidden">
                <ul class="flex flex-col text-white items-end space-y-4 mt-2">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-gray-400">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('aboutUs') }}" class="hover:text-gray-400">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('ourService') }}" class="hover:text-gray-400">Our Service</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}" class="hover:text-gray-400">Products</a>
                    </li>
                    <li>
                        <a href="{{ route('partnerships') }}" class="hover:text-gray-400">Partnership</a>
                    </li>
                    <li>
                        <a href="{{ route('reviews') }}" class="hover:text-gray-400">Reviews</a>
                    </li>
                    <li>
                        <a href="{{ route('openingHours') }}" class="hover:text-gray-400">Opening Hours</a>
                    </li>
                    <li>
                        <a href="{{ route('contactUs') }}" class="hover:text-gray-400">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
