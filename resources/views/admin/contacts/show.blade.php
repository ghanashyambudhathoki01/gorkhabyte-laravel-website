<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    {{ __('Message Details') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">View and manage contact message</p>
            </div>
            <a href="{{ route('admin.contacts.index') }}"
                class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 transition-all duration-200 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Messages
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100">
                <!-- Message Header -->
                <div
                    class="bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 px-8 py-6 border-b border-gray-200">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-4 flex-1">
                            <!-- Avatar -->
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <span
                                    class="text-white text-xl font-bold">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                            </div>

                            <!-- Sender Info -->
                            <div class="flex-1 min-w-0">
                                <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $contact->name }}</h3>
                                <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:{{ $contact->email }}"
                                        class="hover:text-indigo-600 transition-colors">{{ $contact->email }}</a>
                                </div>

                                <!-- Timestamp with proper timezone handling -->
                                <div class="flex items-center gap-4 text-xs text-gray-500">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $contact->created_at->timezone(config('app.timezone', 'UTC'))->format('F d, Y') }}</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>
                                            {{ $contact->created_at->timezone('Asia/Kathmandu')->format('g:i A') }}
                                        </span>

                                    </div>
                                    <span class="px-2 py-0.5 bg-gray-200 text-gray-700 rounded-full font-medium">
                                        {{ $contact->created_at->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Content -->
                <div class="p-8">
                    <!-- Subject -->
                    <div class="mb-6 pb-6 border-b border-gray-200">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">Subject</span>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ $contact->subject }}</h2>
                    </div>

                    <!-- Message Body -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-500 uppercase tracking-wide">Message</span>
                        </div>
                        <div
                            class="bg-gradient-to-br from-gray-50 to-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <p class="whitespace-pre-wrap text-gray-800 leading-relaxed">{{ $contact->message }}</p>
                        </div>
                    </div>

                    <!-- Metadata -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-gray-50 rounded-xl">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Received Date</p>
                                <p class="text-sm font-semibold text-gray-900">
                                    {{ $contact->created_at->timezone(config('app.timezone', 'UTC'))->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Received Time</p>
                                <p class="text-sm font-semibold text-gray-900">
                                    {{ $contact->created_at->timezone('Asia/Kathmandu')->format('g:i A') }}
                                </p>
                            </div>

                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Message ID</p>
                                <p class="text-sm font-semibold text-gray-900">#{{ $contact->id }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div
                    class="px-8 py-6 bg-gray-50 border-t border-gray-200 flex flex-col sm:flex-row gap-3 justify-between items-center">
                    <div class="flex gap-3 w-full sm:w-auto">
                        <a href="mailto:{{ $contact->email }}?subject=Re: {{ urlencode($contact->subject) }}"
                            class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl hover:from-indigo-700 hover:to-purple-700 font-semibold transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                            </svg>
                            Reply to Message
                        </a>
                    </div>

                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                        class="w-full sm:w-auto"
                        onsubmit="return confirm('Are you sure you want to delete this message? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-white border-2 border-red-200 text-red-600 rounded-xl hover:bg-red-50 hover:border-red-300 font-semibold transition-all duration-200 shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Quick Actions Card -->
            <div
                class="mt-8 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 rounded-2xl p-6 border border-blue-100">
                <h3 class="text-sm font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    Quick Actions
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3">
                    <button type="button" onclick="copyToClipboard('{{ $contact->email }}')"
                        class="flex items-center gap-2 px-4 py-3 bg-white rounded-xl border border-gray-200 hover:border-indigo-300 hover:bg-indigo-50 transition-all duration-200 text-sm font-medium text-gray-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        Copy Email
                    </button>
                    <button type="button" onclick="copyToClipboard('{{ $contact->subject }}')"
                        class="flex items-center gap-2 px-4 py-3 bg-white rounded-xl border border-gray-200 hover:border-indigo-300 hover:bg-indigo-50 transition-all duration-200 text-sm font-medium text-gray-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        Copy Subject
                    </button>
                    <button type="button" onclick="copyToClipboard('{{ addslashes($contact->message) }}')"
                        class="flex items-center gap-2 px-4 py-3 bg-white rounded-xl border border-gray-200 hover:border-indigo-300 hover:bg-indigo-50 transition-all duration-200 text-sm font-medium text-gray-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        Copy Message
                    </button>
                    <button type="button" onclick="window.print()"
                        class="flex items-center gap-2 px-4 py-3 bg-white rounded-xl border border-gray-200 hover:border-indigo-300 hover:bg-indigo-50 transition-all duration-200 text-sm font-medium text-gray-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                        Print
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function copyToClipboard(text) {
                // Create a temporary textarea element
                const textarea = document.createElement('textarea');
                textarea.value = text;
                textarea.style.position = 'fixed';
                textarea.style.opacity = '0';
                document.body.appendChild(textarea);
                textarea.select();

                try {
                    document.execCommand('copy');
                    // Show success feedback
                    showToast('Copied to clipboard!', 'success');
                } catch (err) {
                    showToast('Failed to copy', 'error');
                }

                document.body.removeChild(textarea);
            }

            function showToast(message, type = 'success') {
                // Create toast element
                const toast = document.createElement('div');
                toast.className = `fixed bottom-4 right-4 px-6 py-3 rounded-xl shadow-lg transform transition-all duration-300 z-50 ${
                type === 'success' 
                    ? 'bg-green-500 text-white' 
                    : 'bg-red-500 text-white'
            }`;
                toast.innerHTML = `
                <div class="flex items-center gap-2">
                    ${type === 'success' 
                        ? '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>'
                        : '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>'
                    }
                    <span class="font-medium">${message}</span>
                </div>
            `;

                document.body.appendChild(toast);

                // Animate in
                setTimeout(() => toast.style.transform = 'translateY(0)', 10);

                // Remove after 3 seconds
                setTimeout(() => {
                    toast.style.transform = 'translateY(100px)';
                    toast.style.opacity = '0';
                    setTimeout(() => document.body.removeChild(toast), 300);
                }, 3000);
            }
        </script>
    @endpush

    @push('styles')
        <style>
            @media print {

                header,
                .bg-gray-50,
                button,
                form {
                    display: none !important;
                }

                .bg-white {
                    box-shadow: none !important;
                }
            }
        </style>
    @endpush
</x-app-layout>
