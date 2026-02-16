<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">
                    Enquiry / Contact Message Details
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    Full submission from user — ID #{{ $contact->id }}
                </p>
            </div>
            <a href="{{ route('admin.contacts.index') }}"
               class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Enquiries
            </a>
        </div>
    </x-slot>

    <div class="py-6 sm:py-8">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- Main Card -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">

                <!-- Header / Sender Info -->
                <div class="px-6 py-6 sm:px-8 sm:py-7 border-b border-gray-100 bg-gray-50/50">
                    <div class="flex flex-col sm:flex-row sm:items-start gap-5">
                        <!-- Avatar -->
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-indigo-500 to-indigo-700 rounded-full flex items-center justify-center flex-shrink-0 shadow-md text-white text-2xl font-bold">
                            {{ strtoupper(substr(trim($contact->name ?? ''), 0, 1)) ?: '?' }}
                        </div>

                        <div class="flex-1 min-w-0 space-y-3">
                            <h3 class="text-2xl font-semibold text-gray-900 truncate">
                                {{ $contact->name ?? 'No name provided' }}
                            </h3>

                            <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm">
                                <!-- Email -->
                                <a href="mailto:{{ $contact->email }}"
                                   class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center gap-1.5 hover:underline">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    {{ $contact->email ?? '—' }}
                                </a>

                                <!-- Phone -->
                                <div class="flex items-center gap-1.5 text-gray-700 font-medium">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    {{ $contact->phone ?? '—' }}
                                </div>
                            </div>

                            <div class="text-sm text-gray-500 flex flex-wrap gap-x-4 gap-y-1">
                                <span>Submitted {{ $contact->created_at->diffForHumans() }}</span>
                                <span>•</span>
                                <time datetime="{{ $contact->created_at }}" class="font-medium">
                                    {{ $contact->created_at->timezone('Asia/Kathmandu')->format('M d, Y • g:i A') }}
                                </time>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Submitted Fields -->
                <div class="p-6 sm:p-8 space-y-8 divide-y divide-gray-100">

                    <!-- Enquiry Type -->
                    <div class="pb-6">
                        <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-2">Enquiry Type</h4>
                        <p class="text-lg font-medium text-gray-900 capitalize">
                            {{ ucfirst($contact->type ?? '—') }}
                            @if($contact->type === 'training')
                                <span class="text-gray-600 text-base">(IT Training / Course)</span>
                            @elseif($contact->type === 'service')
                                <span class="text-gray-600 text-base">(IT Services / Support)</span>
                            @elseif($contact->type === 'both')
                                <span class="text-gray-600 text-base">(Training + Services)</span>
                            @elseif($contact->type === 'general')
                                <span class="text-gray-600 text-base">(General Inquiry)</span>
                            @endif
                        </p>
                    </div>

                    <!-- Specific Course / Service -->
                    <div class="py-6">
                        <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-2">Specific Course / Service</h4>
                        <p class="text-lg font-medium text-gray-900">
                            {{ $contact->course_or_service ?: 'Not specified' }}
                        </p>
                    </div>

                    <!-- Subject -->
                    <div class="py-6">
                        <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-2">Subject</h4>
                        <h3 class="text-xl font-bold text-gray-900">
                            {{ $contact->subject ?? '(No subject provided)' }}
                        </h3>
                    </div>

                    <!-- Message -->
                    <div class="pt-6">
                        <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-3">User Message</h4>
                        <div class="prose prose-gray max-w-none bg-gray-50 p-6 rounded-xl border border-gray-100 whitespace-pre-wrap leading-relaxed text-gray-800 text-base">
                            {{ $contact->message ?? '(No message provided)' }}
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="px-6 py-5 sm:px-8 sm:py-6 bg-gray-50 border-t border-gray-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex flex-wrap gap-3">
                        <!-- Email Reply -->
                        <a href="mailto:{{ $contact->email }}?subject=Re%3A%20{{ urlencode($contact->subject ?? 'Your enquiry') }}"
                           class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 font-medium transition-colors shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                            </svg>
                            Reply via Email
                        </a>

                        <!-- WhatsApp Reply -->
                        @if($contact->phone)
                            <a href="https://wa.me/{{ preg_replace('/\D/', '', $contact->phone) }}?text=Hello%20{{ urlencode($contact->name ?? 'there') }},%20regarding%20your%20enquiry..."
                               target="_blank" rel="noopener"
                               class="inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white rounded-lg hover:bg-green-700 font-medium transition-colors shadow-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.198-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.074-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004c-2.39 0-4.74-.665-6.787-1.921l-.487-.288-5.048 1.324 1.347-4.917-.317-.533C.839 15.818 0 13.503 0 11.026 0 4.943 4.943 0 11.026 0c2.96 0 5.74 1.155 7.833 3.25C20.845 5.342 22 8.12 22 11.026c0 6.083-4.943 11.026-11.026 11.026z"/>
                                </svg>
                                Reply on WhatsApp
                            </a>
                        @endif
                    </div>

                    <!-- Delete -->
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to permanently delete this enquiry?');"
                          class="w-full sm:w-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-white border border-red-300 text-red-700 rounded-lg hover:bg-red-50 hover:border-red-400 font-medium transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete Enquiry
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>