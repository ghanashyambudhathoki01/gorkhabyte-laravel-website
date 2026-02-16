
<x-guest-layout>
    <div class="max-w-md mx-auto">
        <!-- Header with Branding -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-3xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-indigo-500/20">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
            </div>
            <h2 class="text-2xl font-light text-gray-900 dark:text-white mb-2">
                {{ __('Create an account') }}
            </h2>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                {{ __('Join us today and get started') }}
            </p>
        </div>

        <!-- Registration Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 p-6 md:p-8">
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name Field -->
                <div class="space-y-2">
                    <x-input-label for="name" 
                        :value="__('Full name')" 
                        class="text-sm font-medium text-gray-700 dark:text-gray-300" />
                    
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <x-text-input 
                            id="name" 
                            class="block w-full pl-10 pr-4 py-3 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 ease-in-out"
                            type="text" 
                            name="name" 
                            :value="old('name')" 
                            placeholder="John Doe"
                            required 
                            autofocus 
                            autocomplete="name" 
                        />
                    </div>
                    <x-input-error :messages="$errors->get('name')" 
                        class="text-sm text-red-600 dark:text-red-400 mt-2" />
                </div>

                <!-- Email Field -->
                <div class="space-y-2">
                    <x-input-label for="email" 
                        :value="__('Email address')" 
                        class="text-sm font-medium text-gray-700 dark:text-gray-300" />
                    
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <x-text-input 
                            id="email" 
                            class="block w-full pl-10 pr-4 py-3 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 ease-in-out"
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            placeholder="john@company.com"
                            required 
                            autocomplete="username" 
                        />
                    </div>
                    <x-input-error :messages="$errors->get('email')" 
                        class="text-sm text-red-600 dark:text-red-400 mt-2" />
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <x-input-label for="password" 
                        :value="__('Password')" 
                        class="text-sm font-medium text-gray-700 dark:text-gray-300" />
                    
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <x-text-input 
                            id="password" 
                            class="block w-full pl-10 pr-4 py-3 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 ease-in-out"
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            required 
                            autocomplete="new-password" 
                        />
                    </div>
                    <x-input-error :messages="$errors->get('password')" 
                        class="text-sm text-red-600 dark:text-red-400 mt-2" />
                </div>

                <!-- Confirm Password Field -->
                <div class="space-y-2">
                    <x-input-label for="password_confirmation" 
                        :value="__('Confirm password')" 
                        class="text-sm font-medium text-gray-700 dark:text-gray-300" />
                    
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <x-text-input 
                            id="password_confirmation" 
                            class="block w-full pl-10 pr-4 py-3 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 ease-in-out"
                            type="password"
                            name="password_confirmation"
                            placeholder="••••••••"
                            required 
                            autocomplete="new-password" 
                        />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" 
                        class="text-sm text-red-600 dark:text-red-400 mt-2" />
                </div>

                <!-- Password Strength Indicator (Optional enhancement) -->
                <div class="space-y-2">
                    <div class="flex space-x-1">
                        <div class="h-1 w-full bg-gray-200 dark:bg-gray-700 rounded-full"></div>
                        <div class="h-1 w-full bg-gray-200 dark:bg-gray-700 rounded-full"></div>
                        <div class="h-1 w-full bg-gray-200 dark:bg-gray-700 rounded-full"></div>
                        <div class="h-1 w-full bg-gray-200 dark:bg-gray-700 rounded-full"></div>
                    </div>
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        {{ __('Use at least 8 characters with letters, numbers & symbols') }}
                    </p>
                </div>

                <!-- Terms Agreement -->
                <div class="flex items-center">
                    <input id="terms" type="checkbox" 
                        class="w-4 h-4 text-indigo-600 bg-gray-50 dark:bg-gray-900 border-gray-300 dark:border-gray-700 rounded focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition duration-200"
                        required>
                    <label for="terms" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('I agree to the') }} 
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">{{ __('Terms of Service') }}</a> 
                        {{ __('and') }} 
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">{{ __('Privacy Policy') }}</a>
                    </label>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3">
                    <x-primary-button class="w-full justify-center py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            {{ __('Create account') }}
                        </span>
                    </x-primary-button>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-xs">
                            <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                                {{ __('Already have an account?') }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" 
                        class="block w-full py-3 px-4 text-center text-sm font-medium text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl transition-all duration-200">
                        {{ __('Sign in instead') }}
                    </a>
                </div>
            </form>
        </div>

        <!-- Footer Links -->
        <div class="text-center mt-8 space-x-4">
            <a href="#" class="text-xs text-gray-400 dark:text-gray-600 hover:text-gray-500 dark:hover:text-gray-500 transition-colors duration-200">
                {{ __('Help') }}
            </a>
            <span class="text-xs text-gray-300 dark:text-gray-700">•</span>
            <a href="#" class="text-xs text-gray-400 dark:text-gray-600 hover:text-gray-500 dark:hover:text-gray-500 transition-colors duration-200">
                {{ __('Contact') }}
            </a>
        </div>
    </div>
</x-guest-layout>