<x-public-layout>
    <div class="py-16 bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col justify-center">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <!-- Header with Branding -->
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-3xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-indigo-500/20">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mt-4">
                    Join the Student Portal
                </h2>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mt-2">
                    Start your learning journey with Gorkhabyte Academy
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 py-8 px-4 shadow-xl sm:rounded-3xl sm:px-10 border border-gray-100 dark:border-gray-700">
                <form method="POST" action="{{ route('student.register.store') }}" class="space-y-6">
                    @csrf

                    <!-- Name Field -->
                    <div class="space-y-1">
                        <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            {{ __('Full Name') }}
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus placeholder="John Doe" 
                                class="block w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Field -->
                    <div class="space-y-1">
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            {{ __('Email Address') }}
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required placeholder="email@example.com" 
                                class="block w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-1">
                        <label for="password" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            {{ __('Password') }}
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-indigo-500 transition-colors">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input id="password" name="password" type="password" required placeholder="••••••••" 
                                class="block w-full pl-10 pr-12 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                            <button type="button" onclick="togglePasswordVisibility('password', this)" 
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-indigo-500 transition-colors">
                                <svg class="h-5 w-5 eye-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg class="h-5 w-5 eye-off-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="space-y-1">
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 dark:text-gray-300">
                            {{ __('Confirm Password') }}
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-indigo-500 transition-colors">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="••••••••" 
                                class="block w-full pl-10 pr-12 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                            <button type="button" onclick="togglePasswordVisibility('password_confirmation', this)" 
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-indigo-500 transition-colors">
                                <svg class="h-5 w-5 eye-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg class="h-5 w-5 eye-off-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="terms" type="checkbox" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded dark:bg-gray-900 dark:border-gray-700">
                        <label for="terms" class="ml-2 block text-sm text-gray-600 dark:text-gray-400">
                            {{ __('I agree to the') }} 
                            <a href="{{ route('terms') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">Terms</a> 
                            {{ __('and') }} 
                            <a href="{{ route('privacy') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">Privacy Policy</a>
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-4 px-4 border border-transparent rounded-xl shadow-lg text-lg font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all transform hover:-translate-y-0.5">
                            Create Student Account
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-gray-800 text-gray-500">
                                {{ __('Already have an account?') }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-center space-x-4">
                        <a href="{{ route('login') }}" class="text-sm font-bold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500">
                            {{ __('Sign in instead') }}
                        </a>
                    </div>
                </div>
            </div>
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
</x-public-layout>
