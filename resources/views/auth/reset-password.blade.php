<x-guest-layout>
    <div class="max-w-md mx-auto">
        <!-- Header with Icon -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-3xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-indigo-500/20">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
            </div>
            <h2 class="text-2xl font-light text-gray-900 dark:text-white mb-2">
                {{ __('Reset your password') }}
            </h2>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                {{ __('Please choose a new secure password for your account') }}
            </p>
        </div>

        <!-- Reset Password Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 p-6 md:p-8">
            <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address (Hidden in UI but kept for functionality) -->
                <div class="hidden">
                    <x-text-input id="email" type="email" name="email" :value="old('email', $request->email)" autocomplete="username" />
                </div>

                <!-- Display Email (Read-only for context) -->
                <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-4 border border-gray-200 dark:border-gray-700">
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">
                        {{ __('Resetting password for') }}
                    </p>
                    <p class="text-sm font-medium text-gray-900 dark:text-white flex items-center">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        {{ $request->email }}
                    </p>
                </div>

                <!-- New Password Field -->
                <div class="space-y-2">
                    <x-input-label for="password" 
                        :value="__('New password')" 
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

                <!-- Confirm New Password Field -->
                <div class="space-y-2">
                    <x-input-label for="password_confirmation" 
                        :value="__('Confirm new password')" 
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

                <!-- Password Requirements -->
                <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-4 space-y-2">
                    <p class="text-xs font-medium text-gray-700 dark:text-gray-300 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ __('Password requirements:') }}
                    </p>
                    <ul class="text-xs text-gray-500 dark:text-gray-400 space-y-1 ml-6 list-disc">
                        <li>{{ __('At least 8 characters long') }}</li>
                        <li>{{ __('Contains at least one uppercase letter') }}</li>
                        <li>{{ __('Contains at least one number') }}</li>
                        <li>{{ __('Contains at least one special character') }}</li>
                    </ul>
                </div>

                <!-- Action Button -->
                <div class="space-y-3">
                    <x-primary-button class="w-full justify-center py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            {{ __('Reset password') }}
                        </span>
                    </x-primary-button>

                    <a href="{{ route('login') }}" 
                        class="block text-center text-sm text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        {{ __('← Back to login') }}
                    </a>
                </div>
            </form>
        </div>

        <!-- Security Note -->
        <p class="text-center mt-6 text-xs text-gray-400 dark:text-gray-600 flex items-center justify-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
            {{ __('Your password will be encrypted and securely stored') }}
        </p>
    </div>
</x-guest-layout>