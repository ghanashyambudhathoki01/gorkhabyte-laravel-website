<aside class="fixed left-0 top-0 z-40 h-screen w-64 transition-transform -translate-x-full sm:translate-x-0 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto flex flex-col justify-between">
        <div>
            <div class="flex items-center ps-2.5 mb-10">
                <a href="{{ route('home') }}" class="flex items-center">
                    <x-application-logo class="h-8 me-3 fill-current text-indigo-600 dark:text-indigo-400" />
                    <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white text-gray-800">Gorkhabyte</span>
                </a>
            </div>
            
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('student.dashboard') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group {{ request()->routeIs('student.dashboard') ? 'bg-indigo-50 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400 border border-indigo-100 dark:border-gray-600' : '' }}">
                        <svg class="w-5 h-5 transition duration-75 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 {{ request()->routeIs('student.dashboard') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('student.videos.index') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group {{ request()->routeIs('student.videos.*') ? 'bg-indigo-50 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400 border border-indigo-100 dark:border-gray-600' : '' }}">
                        <svg class="w-5 h-5 transition duration-75 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 {{ request()->routeIs('student.videos.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0ZM6.143 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                        </svg>
                        <span class="ms-3">Video Library</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('student.feedback.create') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group {{ request()->routeIs('student.feedback.*') ? 'bg-indigo-50 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400 border border-indigo-100 dark:border-gray-600' : '' }}">
                        <svg class="w-5 h-5 transition duration-75 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 {{ request()->routeIs('student.feedback.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89V2a1 1 0 0 0-1-1h-2a1 1 0 0 0 0 2h1v.1a6.732 6.732 0 0 0-2.28 1.13c-.023.016-.048.026-.07.043-.027.02-.052.043-.078.064l-.014.01c-.131.103-.25.215-.365.333a6.76 6.76 0 0 0-1.47 2.378c-.023.067-.04.135-.059.204a6.772 6.772 0 0 0-.083.473c-.007.054-.012.108-.016.163L3.435 9h13.13l-.012-.132a6.716 6.716 0 0 0-.166-1.12c-.02-.084-.044-.167-.07-.251a6.765 6.765 0 0 0-1.57-2.617h-.002a6.74 6.74 0 0 0-.256-.25c-.015-.015-.034-.027-.05-.043ZM5.98 11.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Zm4.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                            <path d="M10.4 17.394a1.8 1.8 0 1 1-2.8 0 15.655 15.655 0 0 1-7.536-5.833 3.488 3.488 0 0 0 3.3 2.439h13.272a3.488 3.488 0 0 0 3.3-2.439 15.655 15.655 0 0 1-7.536 5.833Z"/>
                        </svg>
                        <span class="ms-3">Submit Feedback</span>
                    </a>
                </li>
                
                <li class="pt-4 mt-4 border-t border-gray-100 dark:border-gray-700">
                    <span class="ps-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Learning</span>
                </li>
                
                <li>
                    <a href="{{ route('training') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group {{ request()->routeIs('training*') ? 'bg-indigo-50 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400' : '' }}">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M19.707 9.293l-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414z"/>
                        </svg>
                        <span class="ms-3">Browse Programs</span>
                    </a>
                </li>

                <li class="pt-4 mt-4 border-t border-gray-100 dark:border-gray-700">
                    <span class="ps-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Account</span>
                </li>

                <li>
                    <a href="{{ route('profile.edit') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group {{ request()->routeIs('profile.edit') ? 'bg-indigo-50 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400 border border-indigo-100 dark:border-gray-600' : '' }}">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                        <span class="ms-3">My Profile</span>
                    </a>
                </li>

                <li class="pt-4 mt-4 border-t border-gray-100 dark:border-gray-700">
                    <span class="ps-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Main Site</span>
                </li>

                <li>
                    <a href="{{ route('home') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="ms-3">Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="ms-3">About Us</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('services') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="ms-3">Services</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('blog') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <span class="ms-3">Academy Blog</span>
                    </a>
                </li>

                <li class="pt-4 mt-4 border-t border-gray-100 dark:border-gray-700">
                    <span class="ps-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Legal & Support</span>
                </li>

                <li>
                    <a href="{{ route('contact') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <span class="ms-3">Support Center</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('terms') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                        </svg>
                        <span class="ms-3">Terms & Conditions</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('privacy') }}" class="flex items-center p-3 text-gray-900 rounded-xl dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-700 group {{ request()->routeIs('privacy') ? 'bg-indigo-50 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400' : '' }}">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-indigo-600 dark:group-hover:text-indigo-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.9L10 .3l7.834 4.6a1 1 0 01.5 1.075c-.655 4.904-2.887 9.176-7.834 11.23a1 1 0 01-.75 0C4.72 15.15 2.488 10.878 1.834 5.976a1 1 0 01.5-1.076zM10 2.25L4.544 5.484c.465 3.396 1.936 6.362 5.456 8.243 3.52-1.88 4.99-4.847 5.456-8.243L10 2.25z" clip-rule="evenodd"/>
                        </svg>
                        <span class="ms-3">Privacy Policy</span>
                    </a>
                </li>

                <!-- Social Links -->
                <li class="pt-6 mt-6 border-t border-gray-100 dark:border-gray-700 pb-4 px-2">
                    <div class="flex items-center justify-center space-x-6">
                        <a href="https://www.facebook.com/profile.php?id=61586106820664" target="_blank" class="text-gray-400 hover:text-blue-600 transition p-1">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="https://www.youtube.com/@GorkhabyteAcademy" target="_blank" class="text-gray-400 hover:text-red-600 transition p-1">
                            <i class="fab fa-youtube text-lg"></i>
                        </a>
                        <a href="https://www.tiktok.com/@GorkhabyteAcademy" target="_blank" class="text-gray-400 hover:text-black dark:hover:text-white transition p-1">
                            <i class="fab fa-tiktok text-lg"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="pt-4 border-t border-gray-100 dark:border-gray-700 space-y-1">
            @if(Auth::user()->isAdmin())
                <a href="{{ route('dashboard') }}" class="w-full flex items-center p-3 text-amber-600 rounded-xl hover:bg-amber-50 dark:hover:bg-amber-900/20 group transition duration-75 mb-1">
                    <svg class="w-5 h-5 text-amber-600 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    <span class="ms-3 font-semibold">Admin Panel</span>
                </a>
            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center p-3 text-red-600 rounded-xl hover:bg-red-50 dark:hover:bg-red-900/20 group transition duration-75">
                    <svg class="w-5 h-5 text-red-600 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    <span class="ms-3 font-semibold">Sign Out</span>
                </button>
            </form>
        </div>
    </div>
</aside>
