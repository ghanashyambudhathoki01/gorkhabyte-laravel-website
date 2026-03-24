<x-guest-layout>
    <div class="max-w-md mx-auto">
        <h2 class="text-2xl font-light text-gray-900 dark:text-white mb-2">
            {{ __('Welcome back') }}
        </h2>
        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            {{ __('Please sign in to your account') }}
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <!-- Login Form Card -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 p-6 md:p-8">
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Field -->
            <div class="space-y-2">
                <x-input-label for="email" :value="__('Email address')"
                    class="text-sm font-medium text-gray-700 dark:text-gray-300" />

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <x-text-input id="email"
                        class="block w-full pl-10 pr-4 py-3 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 ease-in-out"
                        type="email" name="email" :value="old('email')" placeholder="name@company.com" required
                        autofocus autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="text-sm text-red-600 dark:text-red-400 mt-2" />
            </div>

            <!-- Password Field -->
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <x-input-label for="password" :value="__('Password')"
                        class="text-sm font-medium text-gray-700 dark:text-gray-300" />

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-xs text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300 font-medium transition-colors duration-200">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <div class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-indigo-500 transition-colors">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <x-text-input id="password"
                        class="block w-full pl-10 pr-12 py-3 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 ease-in-out"
                        type="password" name="password" placeholder="••••••••" required
                        autocomplete="current-password" />
                    <button type="button" onclick="togglePasswordVisibility('password', this)" 
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-indigo-500 transition-colors focus:outline-none">
                        <svg class="h-5 w-5 eye-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg class="h-5 w-5 eye-off-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                        </svg>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="text-sm text-red-600 dark:text-red-400 mt-2" />
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center">
                <label for="remember_me" class="flex items-center cursor-pointer group">
                    <input id="remember_me" type="checkbox"
                        class="w-4 h-4 text-indigo-600 bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 rounded focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition duration-200"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors duration-200">
                        {{ __('Keep me signed in') }}
                    </span>
                </label>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-3">
                <x-primary-button
                    class="w-full justify-center py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                    <span class="flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Sign in to account') }}
                    </span>
                </x-primary-button>

            </div>
        </form>
    </div>

    <!-- Footer Links -->
    <div class="flex justify-center mt-8 space-x-2 text-center">
    <a href="{{ route('privacy') }}" class="text-xs text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors duration-200">
        {{ __('Privacy') }}
    </a>
    <span class="text-xs text-gray-400 dark:text-gray-500">•</span>
    <a href="{{ route('terms') }}" class="text-xs text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors duration-200">
        {{ __('Terms') }}
    </a>
</div>

    </div>


    </a>
    </div>
    </div>
    <script>
        function togglePasswordVisibility(id, btn) {
            const input = document.getElementById(id);
            const eyeIcon = btn.querySelector('.eye-icon');
            const eyeOffIcon = btn.querySelector('.eye-off-icon');
            
            if (input.type === 'password') {
                input.type = 'text';
                eyeIcon.classList.add('hidden');
                eyeOffIcon.classList.remove('hidden');
            } else {
                input.type = 'password';
                eyeIcon.classList.remove('hidden');
                eyeOffIcon.classList.add('hidden');
            }
        }
    </script>
</x-guest-layout>
