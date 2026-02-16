<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gorkhabyte Academy') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Dark Mode Script -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/logo.jpeg') }}">

    <style>
        /* Smooth navbar backdrop blur effect */
        .nav-blur {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .dark .nav-blur {
            background-color: rgba(17, 24, 39, 0.8);
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-900 dark:text-gray-100">
    <div class="min-h-screen flex flex-col bg-gray-50 dark:bg-gray-900">
        <!-- Navigation -->
        <nav x-data="{ 
                open: false, 
                scrolled: false,
                init() {
                    this.scrolled = window.scrollY > 20;
                    window.addEventListener('scroll', () => {
                        this.scrolled = window.scrollY > 20;
                    });
                }
            }"
            :class="scrolled ? 'nav-blur shadow-md' : 'bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700'"
            class="fixed w-full top-0 z-50 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center justify-between w-full">
                        <!-- Logo (Left) -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('home') }}" class="flex items-center space-x-2 sm:space-x-3 group">
                                <x-application-logo class="block h-10 w-10 sm:h-12 sm:w-12 rounded-lg bg-white dark:bg-gray-700 shadow-sm hover:scale-105 transition-transform" />

                                <span class="text-lg sm:text-xl font-bold gradient-text hidden min-[380px]:block dark:text-gray-100">
                                    Gorkhabyte Academy
                                </span>
                            </a>
                        </div>

                        <!-- Navigation Links (Center) -->
                        <div class="hidden md:flex md:flex-1 md:justify-center md:space-x-1">
                            <a href="{{ route('home') }}"
                                class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('home') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                Home
                            </a>
                            <a href="{{ route('about') }}"
                                class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('about') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                About Us
                            </a>
                            <a href="{{ route('services') }}"
                                class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('services') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                Services
                            </a>
                            <a href="{{ route('training') }}"
                                class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('training') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                Training
                            </a>
                            <a href="{{ route('blog') }}"
                                class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('blog') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                Blog
                            </a>
                            <a href="{{ route('contact') }}"
                                class="px-4 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('contact') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                Contact
                            </a>
                        </div>

                        <!-- Right Actions (Dark Mode Toggle) -->
                        <div class="hidden md:flex md:items-center">
                            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2 transition">
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="flex items-center md:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden border-t border-gray-100 dark:border-gray-700">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white dark:bg-gray-800">
                    <a href="{{ route('home') }}"
                        class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        About Us
                    </a>
                    <a href="{{ route('services') }}"
                        class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('services') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                         Services
                    </a>
                    <a href="{{ route('training') }}"
                        class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('training') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Training
                    </a>
                    <a href="{{ route('blog') }}"
                        class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('blog') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Blog
                    </a>
                    <a href="{{ route('contact') }}"
                        class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('contact') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                        Contact
                    </a>
                </div>
            </div>
        </nav>

        <!-- Spacer for fixed nav -->
        <div class="h-16"></div>

        <!-- Page Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <!-- Brand Column -->
                    <div class="md:col-span-2">
                        <a href="/" class="flex items-center space-x-3 mb-4 hover:opacity-80 transition-opacity">
                            <x-application-logo class="h-12 w-12 rounded-lg object-contain bg-white/10 p-1" />
                            <span class="text-xl font-bold">Gorkhabyte Academy</span>
                        </a>
                        <p class="text-gray-400 mb-4 max-w-md">
                            Empowering the next generation of tech leaders with cutting-edge training and innovative
                            solutions.
                        </p>

                        <!-- Social Icons -->
                        <div class="flex space-x-4 mt-4">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/profile.php?id=61586106820664" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-gray-400 hover:text-white transition-colors transform hover:scale-110 text-2xl">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <!-- YouTube -->
                            <a href="https://www.youtube.com/@GorkhabyteAcademy" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="text-gray-400 hover:text-white transition-colors transform hover:scale-110 text-2xl">
                                <i class="fab fa-youtube"></i>
                            </a>

                            <!-- TikTok -->
                            <a href="https://www.tiktok.com/@GorkhabyteAcademy" target="_blank" rel="noopener noreferrer" aria-label="TikTok" class="text-gray-400 hover:text-white transition-colors transform hover:scale-110 text-2xl">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors inline-block hover:translate-x-1 transform duration-200">Home</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors inline-block hover:translate-x-1 transform duration-200">About Us</a></li>
                            <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition-colors inline-block hover:translate-x-1 transform duration-200">Services</a></li>
                            <li><a href="{{ route('training') }}" class="text-gray-400 hover:text-white transition-colors inline-block hover:translate-x-1 transform duration-200">Training</a></li>
                            <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-white transition-colors inline-block hover:translate-x-1 transform duration-200">Blog</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li>
                                <a href="https://maps.app.goo.gl/nZX7BB9XEbER4iWX8" target="_blank" rel="noopener noreferrer" class="flex items-start hover:text-white transition-colors group">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Dolakha Nepal, Charikot</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:gorkhabyteacademy@gmail.com" class="flex items-start hover:text-white transition-colors group">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span>gorkhabyteacademy@gmail.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+9779865438982" class="flex items-start hover:text-white transition-colors group">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span>+9779865438982</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">
                        &copy; {{ date('Y') }} <a href="/" class="hover:text-white transition-colors">Gorkhabyte Academy</a>. All rights reserved.
                    </p>
                    <div class="flex space-x-6 text-sm">
                        <a href="{{ route('privacy') }}" class="text-gray-400 hover:text-white transition-colors hover:underline">Privacy Policy</a>
                        <a href="{{ route('terms') }}" class="text-gray-400 hover:text-white transition-colors hover:underline">Terms of Service</a>
                        <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors hover:underline">Contact Us</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {
        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });
</script>
