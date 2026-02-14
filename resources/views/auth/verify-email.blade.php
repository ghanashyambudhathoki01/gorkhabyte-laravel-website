<x-guest-layout>
    <div class="max-w-md mx-auto">
        <!-- Header with Icon -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-3xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-indigo-500/20">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h2 class="text-2xl font-light text-gray-900 dark:text-white mb-2">
                {{ __('Verify your email') }}
            </h2>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                {{ __('Almost there! Please check your inbox.') }}
            </p>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 p-6 md:p-8">
            
            <!-- Welcome Message -->
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-indigo-50 dark:bg-indigo-900/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11l-4 4-4-4" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">
                    {{ __('Thanks for signing up!') }}
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                    {{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
                </p>
            </div>

            <!-- Success Message -->
            @if (session('status') == 'verification-link-sent')
                <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-100 dark:border-green-800 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3 flex-1">
                            <p class="text-sm font-medium text-green-800 dark:text-green-300">
                                {{ __('✨ A new verification link has been sent to your email address.') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Email Display (Mock) -->
            <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-4 mb-6 border border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 4H8m8-8H8" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-xs font-medium text-gray-500 dark:text-gray-400">
                                {{ __('Verification email sent to') }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ auth()->user()->email ?? 'your email address' }}
                            </p>
                        </div>
                    </div>
                    <span class="text-xs text-gray-400 dark:text-gray-600">
                        {{ __('Check inbox') }}
                    </span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-3">
                <!-- Resend Form -->
                <form method="POST" action="{{ route('verification.send') }}" class="w-full">
                    @csrf
                    <x-primary-button class="w-full justify-center py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            {{ __('Resend verification email') }}
                        </span>
                    </x-primary-button>
                </form>

                <!-- Didn't receive section -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                    </div>
                    <div class="relative flex justify-center text-xs">
                        <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                            {{ __('Having trouble?') }}
                        </span>
                    </div>
                </div>

                <!-- Help Links -->
                <div class="flex items-center justify-between gap-3">
                    <!-- Check spam button (informational) -->
                    <button type="button" onclick="alert('{{ __("Please check your spam or junk folder. If you still don\'t see it, click resend.") }}')" 
                        class="flex-1 py-2 px-3 text-xs font-medium text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg transition-colors duration-200">
                        <span class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            {{ __('Check spam') }}
                        </span>
                    </button>

                    <!-- Logout Form -->
                    <form method="POST" action="{{ route('logout') }}" class="flex-1">
                        @csrf
                        <button type="submit" 
                            class="w-full py-2 px-3 text-xs font-medium text-red-600 dark:text-red-400 bg-red-50 dark:bg-red-900/20 hover:bg-red-100 dark:hover:bg-red-900/30 border border-red-100 dark:border-red-800 rounded-lg transition-colors duration-200">
                            <span class="flex items-center justify-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                {{ __('Log out') }}
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tips Card -->
        <div class="mt-6 bg-indigo-50 dark:bg-indigo-900/10 rounded-xl p-4 border border-indigo-100 dark:border-indigo-800">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h4 class="text-xs font-medium text-indigo-800 dark:text-indigo-300">
                        {{ __('Quick tips:') }}
                    </h4>
                    <ul class="mt-1 text-xs text-indigo-700 dark:text-indigo-400 list-disc list-inside space-y-1">
                        <li>{{ __('Check your spam or junk folder') }}</li>
                        <li>{{ __('Add no-reply@domain.com to your contacts') }}</li>
                        <li>{{ __('The link expires after 24 hours') }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Note -->
        <p class="text-center mt-6 text-xs text-gray-400 dark:text-gray-600">
            {{ __('Need help? Contact our support team') }}
        </p>
    </div>
</x-guest-layout>