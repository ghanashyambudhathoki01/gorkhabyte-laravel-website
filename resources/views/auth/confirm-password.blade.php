<x-guest-layout>
    <div class="max-w-md mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h2 class="text-2xl font-light text-gray-900 dark:text-white mb-2">
                {{ __('Secure Area') }}
            </h2>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400 max-w-xs mx-auto">
                {{ __('This area is protected. Please verify your identity by entering your password.') }}
            </p>
        </div>

        <!-- Form Section -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 p-8">
            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                @csrf

                <!-- Password Field -->
                <div class="space-y-2">
                    <x-input-label for="password" 
                        :value="__('Password')" 
                        class="text-sm font-medium text-gray-700 dark:text-gray-300" />
                    
                    <x-text-input id="password" 
                        class="block w-full px-4 py-3 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 ease-in-out"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required 
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" 
                        class="text-sm text-red-600 dark:text-red-400 mt-2" />
                </div>

                <!-- Action Button -->
                <div class="flex justify-end pt-2">
                    <x-primary-button class="w-full sm:w-auto px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        {{ __('Continue to Secure Area →') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        <!-- Footer Note -->
        <p class="text-center mt-8 text-xs text-gray-400 dark:text-gray-600">
            {{ __('Your security is our priority') }}
        </p>
    </div>
</x-guest-layout>