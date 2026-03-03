<x-public-layout>
    {{-- Hero Section --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-teal-600 via-cyan-600 to-blue-700">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 1440 600" fill="none">
                <circle cx="200" cy="300" r="400" fill="white" opacity="0.05"/>
                <circle cx="1300" cy="100" r="300" fill="white" opacity="0.08"/>
                <circle cx="700" cy="500" r="250" fill="white" opacity="0.04"/>
            </svg>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/15 backdrop-blur-sm rounded-3xl mb-8 border border-white/20 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 tracking-tight">
                Support Center
            </h1>
            <p class="text-lg sm:text-xl text-teal-100 max-w-2xl mx-auto leading-relaxed">
                Need help? We're here for you. Browse our quick help guides below or submit a support ticket and we'll get back to you promptly.
            </p>
        </div>
        {{-- Wave divider --}}
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,60 C360,20 720,80 1080,40 C1260,20 1380,50 1440,60 L1440,80 L0,80 Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </div>

    <div class="bg-gray-50 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Quick Help Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 -mt-10 relative z-10 mb-16">
                {{-- Getting Started --}}
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-7 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-2xl flex items-center justify-center mb-5 shadow-md shadow-emerald-200 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Getting Started</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">New to Gorkhabyte Academy? Check out our training programs, enrollment process, and course schedules.</p>
                </div>

                {{-- Technical Help --}}
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-7 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mb-5 shadow-md shadow-blue-200 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Technical Help</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Having trouble with course access, video playback, or your student account? We can help resolve technical issues.</p>
                </div>

                {{-- Billing & Payments --}}
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-7 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl flex items-center justify-center mb-5 shadow-md shadow-amber-200 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Billing & Payments</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Questions about course fees, payment methods, refunds, or invoices? Reach out and we'll sort it out.</p>
                </div>
            </div>

            {{-- Support Ticket Form --}}
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Submit a Support Ticket</h2>
                    <p class="text-gray-600 text-lg">Can't find what you're looking for? Fill out the form below and our team will respond within 24 hours.</p>
                </div>

                {{-- Success Message --}}
                @if (session('support_success'))
                    <div class="mb-8 p-5 bg-emerald-50 border border-emerald-200 rounded-2xl flex items-start gap-4 animate-[slideDown_0.4s_ease-out]">
                        <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-emerald-800">Ticket Submitted Successfully!</h4>
                            <p class="text-emerald-700 text-sm mt-1">{{ session('support_success') }}</p>
                        </div>
                    </div>
                @endif

                {{-- Error Messages --}}
                @if ($errors->any())
                    <div class="mb-8 p-5 bg-red-50 border border-red-200 rounded-2xl">
                        <div class="flex items-center gap-3 mb-2">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h4 class="font-semibold text-red-800">Please fix the following errors:</h4>
                        </div>
                        <ul class="list-disc pl-8 text-red-700 text-sm space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form Card --}}
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-100 p-8 md:p-10">
                    <form action="{{ route('support.store') }}" method="POST" class="space-y-7">
                        @csrf

                        {{-- Name & Email --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="support_name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                                <input
                                    type="text"
                                    name="name"
                                    id="support_name"
                                    value="{{ old('name') }}"
                                    class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 py-3 px-4 text-gray-900 placeholder-gray-400 transition-all duration-200"
                                    placeholder="Your full name"
                                    required
                                >
                            </div>
                            <div>
                                <label for="support_email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                                <input
                                    type="email"
                                    name="email"
                                    id="support_email"
                                    value="{{ old('email') }}"
                                    class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 py-3 px-4 text-gray-900 placeholder-gray-400 transition-all duration-200"
                                    placeholder="you@example.com"
                                    required
                                >
                            </div>
                        </div>

                        {{-- Category & Priority --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="support_category" class="block text-sm font-semibold text-gray-700 mb-2">Category <span class="text-red-500">*</span></label>
                                <select
                                    name="category"
                                    id="support_category"
                                    class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 py-3 px-4 text-gray-900 transition-all duration-200"
                                    required
                                >
                                    <option value="" disabled {{ old('category') ? '' : 'selected' }}>Select a category</option>
                                    <option value="general" {{ old('category') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                                    <option value="technical" {{ old('category') == 'technical' ? 'selected' : '' }}>Technical Issue</option>
                                    <option value="billing" {{ old('category') == 'billing' ? 'selected' : '' }}>Billing & Payments</option>
                                    <option value="account" {{ old('category') == 'account' ? 'selected' : '' }}>Account Help</option>
                                    <option value="feedback" {{ old('category') == 'feedback' ? 'selected' : '' }}>Feedback / Suggestion</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Priority <span class="text-red-500">*</span></label>
                                <div class="flex flex-wrap gap-2">
                                    @php
                                        $priorities = [
                                            'low' => ['label' => 'Low', 'color' => 'bg-gray-100 text-gray-700 border-gray-300 peer-checked:bg-gray-700 peer-checked:text-white peer-checked:border-gray-700'],
                                            'medium' => ['label' => 'Medium', 'color' => 'bg-blue-50 text-blue-700 border-blue-300 peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600'],
                                            'high' => ['label' => 'High', 'color' => 'bg-orange-50 text-orange-700 border-orange-300 peer-checked:bg-orange-500 peer-checked:text-white peer-checked:border-orange-500'],
                                            'urgent' => ['label' => 'Urgent', 'color' => 'bg-red-50 text-red-700 border-red-300 peer-checked:bg-red-600 peer-checked:text-white peer-checked:border-red-600'],
                                        ];
                                    @endphp
                                    @foreach ($priorities as $value => $config)
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="priority" value="{{ $value }}" class="peer sr-only"
                                                {{ old('priority', 'medium') == $value ? 'checked' : '' }} required>
                                            <span class="inline-block px-4 py-2.5 rounded-xl text-sm font-semibold border transition-all duration-200 {{ $config['color'] }} peer-focus:ring-2 peer-focus:ring-offset-1 peer-focus:ring-teal-400">
                                                {{ $config['label'] }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Subject --}}
                        <div>
                            <label for="support_subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject <span class="text-red-500">*</span></label>
                            <input
                                type="text"
                                name="subject"
                                id="support_subject"
                                value="{{ old('subject') }}"
                                class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 py-3 px-4 text-gray-900 placeholder-gray-400 transition-all duration-200"
                                placeholder="Brief description of your issue"
                                required
                            >
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="support_message" class="block text-sm font-semibold text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
                            <textarea
                                name="message"
                                id="support_message"
                                rows="5"
                                class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500 py-3 px-4 text-gray-900 placeholder-gray-400 transition-all duration-200 resize-y"
                                placeholder="Please describe your issue in detail. Include any relevant information like error messages, steps to reproduce, etc."
                                required
                            >{{ old('message') }}</textarea>
                        </div>

                        {{-- Submit Button --}}
                        <div>
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-teal-600 to-cyan-600 text-white py-4 px-6 rounded-xl font-bold text-lg hover:from-teal-700 hover:to-cyan-700 focus:outline-none focus:ring-4 focus:ring-teal-300 transition-all duration-300 shadow-lg shadow-teal-500/25 hover:shadow-xl hover:shadow-teal-500/30 transform hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-3"
                            >
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                Submit Support Ticket
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Additional Info --}}
                <div class="mt-10 text-center">
                    <p class="text-gray-500 text-sm mb-4">Need to talk to someone directly?</p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <a href="mailto:gorkhabyteacademy@gmail.com" class="inline-flex items-center gap-2 text-teal-700 hover:text-teal-800 font-medium text-sm transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            gorkhabyteacademy@gmail.com
                        </a>
                        <a href="tel:+9779865438982" class="inline-flex items-center gap-2 text-teal-700 hover:text-teal-800 font-medium text-sm transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +977 9865438982
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</x-public-layout>
