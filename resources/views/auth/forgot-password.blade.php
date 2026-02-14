<x-guest-layout>
    <div class="max-w-md mx-auto">
        <!-- Header with Icon -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-indigo-50 dark:bg-indigo-900/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
            </div>
            <h2 class="text-2xl font-light text-gray-900 dark:text-white mb-2">
                {{ __('Reset your password') }}
            </h2>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400 max-w-sm mx-auto">
                {{ __('Enter your email address and we\'ll send you a secure link to reset your password.') }}
            </p>
        </div>

        <!-- Main Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 p-6 md:p-8">
            <!-- Session Status -->
            <x-auth-session-status class="mb-6" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf

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
                            placeholder="you@example.com"
                            required 
                            autofocus 
                        />
                    </div>

                    <x-input-error :messages="$errors->get('email')" 
                        class="text-sm text-red-600 dark:text-red-400 mt-2" />
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3">
                    <x-primary-button class="w-full justify-center py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            {{ __('Send reset link') }}
                        </span>
                    </x-primary-button>

                    <a href="{{ route('login') }}" 
                        class="block text-center text-sm text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        {{ __('← Back to login') }}
                    </a>
                </div>
            </form>
        </div>

        <!-- Help Text -->
        <p class="text-center mt-6 text-xs text-gray-400 dark:text-gray-600">
            {{ __('The link will expire in 60 minutes for security reasons.') }}
        </p>
    </div>
</x-guest-layout>