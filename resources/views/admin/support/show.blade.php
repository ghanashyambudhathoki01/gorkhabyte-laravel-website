<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">
                    Support Ticket Details
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    {{ $ticket->ticket_number }} — submitted {{ $ticket->created_at->diffForHumans() }}
                </p>
            </div>
            <a href="{{ route('admin.support.index') }}"
               class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Tickets
            </a>
        </div>
    </x-slot>

    <div class="py-6 sm:py-8">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            {{-- Success Message --}}
            @if (session('success'))
                <div class="p-4 bg-emerald-50 border border-emerald-200 rounded-xl text-emerald-800 flex items-center gap-3">
                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            {{-- Main Card --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">

                {{-- Header / Sender Info --}}
                <div class="px-6 py-6 sm:px-8 sm:py-7 border-b border-gray-100 bg-gray-50/50">
                    <div class="flex flex-col sm:flex-row sm:items-start gap-5">
                        {{-- Avatar --}}
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-full flex items-center justify-center flex-shrink-0 shadow-md text-white text-2xl font-bold">
                            {{ strtoupper(substr(trim($ticket->name ?? ''), 0, 1)) ?: '?' }}
                        </div>

                        <div class="flex-1 min-w-0 space-y-3">
                            <div class="flex flex-wrap items-center gap-3">
                                <h3 class="text-2xl font-semibold text-gray-900 truncate">
                                    {{ $ticket->name ?? 'No name provided' }}
                                </h3>
                                <span class="text-sm font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg">
                                    {{ $ticket->ticket_number }}
                                </span>
                            </div>

                            <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm">
                                {{-- Email --}}
                                <a href="mailto:{{ $ticket->email }}"
                                   class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center gap-1.5 hover:underline">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    {{ $ticket->email ?? '—' }}
                                </a>
                            </div>

                            <div class="text-sm text-gray-500 flex flex-wrap gap-x-4 gap-y-1">
                                <span>Submitted {{ $ticket->created_at->diffForHumans() }}</span>
                                <span>•</span>
                                <time datetime="{{ $ticket->created_at }}" class="font-medium">
                                    {{ $ticket->created_at->timezone('Asia/Kathmandu')->format('M d, Y • g:i A') }}
                                </time>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Ticket Details --}}
                <div class="p-6 sm:p-8 space-y-8 divide-y divide-gray-100">

                    {{-- Metadata Row --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pb-6">
                        {{-- Category --}}
                        <div>
                            <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-2">Category</h4>
                            @php
                                $categoryColors = [
                                    'general' => 'bg-gray-100 text-gray-800',
                                    'technical' => 'bg-blue-100 text-blue-800',
                                    'billing' => 'bg-amber-100 text-amber-800',
                                    'account' => 'bg-purple-100 text-purple-800',
                                    'feedback' => 'bg-cyan-100 text-cyan-800',
                                ];
                            @endphp
                            <span class="inline-flex px-3 py-1.5 rounded-lg text-sm font-bold {{ $categoryColors[$ticket->category] ?? 'bg-gray-100 text-gray-700' }}">
                                {{ ucfirst($ticket->category) }}
                            </span>
                        </div>

                        {{-- Priority --}}
                        <div>
                            <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-2">Priority</h4>
                            @php
                                $priorityColors = [
                                    'low' => 'bg-gray-100 text-gray-800',
                                    'medium' => 'bg-blue-100 text-blue-800',
                                    'high' => 'bg-orange-100 text-orange-800',
                                    'urgent' => 'bg-red-100 text-red-800',
                                ];
                            @endphp
                            <span class="inline-flex px-3 py-1.5 rounded-lg text-sm font-bold {{ $priorityColors[$ticket->priority] ?? 'bg-gray-100 text-gray-700' }}">
                                {{ ucfirst($ticket->priority) }}
                            </span>
                        </div>

                        {{-- Status --}}
                        <div>
                            <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-2">Status</h4>
                            @php
                                $statusColors = [
                                    'new' => 'bg-blue-100 text-blue-800',
                                    'open' => 'bg-amber-100 text-amber-800',
                                    'resolved' => 'bg-emerald-100 text-emerald-800',
                                    'closed' => 'bg-gray-200 text-gray-600',
                                ];
                            @endphp
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-sm font-bold {{ $statusColors[$ticket->status] ?? 'bg-gray-100 text-gray-700' }}">
                                <span class="w-2 h-2 rounded-full
                                    {{ $ticket->status === 'new' ? 'bg-blue-500' : '' }}
                                    {{ $ticket->status === 'open' ? 'bg-amber-500' : '' }}
                                    {{ $ticket->status === 'resolved' ? 'bg-emerald-500' : '' }}
                                    {{ $ticket->status === 'closed' ? 'bg-gray-400' : '' }}
                                "></span>
                                {{ ucfirst($ticket->status) }}
                            </span>
                        </div>
                    </div>

                    {{-- Subject --}}
                    <div class="py-6">
                        <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-2">Subject</h4>
                        <h3 class="text-xl font-bold text-gray-900">
                            {{ $ticket->subject ?? '(No subject provided)' }}
                        </h3>
                    </div>

                    {{-- Message --}}
                    <div class="pt-6">
                        <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-500 mb-3">Message</h4>
                        <div class="prose prose-gray max-w-none bg-gray-50 p-6 rounded-xl border border-gray-100 whitespace-pre-wrap leading-relaxed text-gray-800 text-base">
                            {{ $ticket->message ?? '(No message provided)' }}
                        </div>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="px-6 py-5 sm:px-8 sm:py-6 bg-gray-50 border-t border-gray-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex flex-wrap items-center gap-3">
                        {{-- Update Status --}}
                        <form action="{{ route('admin.support.updateStatus', $ticket->id) }}" method="POST" class="inline-flex items-center gap-2">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="rounded-lg border-gray-300 text-sm focus:ring-indigo-500 focus:border-indigo-500 py-2 pl-3 pr-8">
                                <option value="new" {{ $ticket->status === 'new' ? 'selected' : '' }}>New</option>
                                <option value="open" {{ $ticket->status === 'open' ? 'selected' : '' }}>Open</option>
                                <option value="resolved" {{ $ticket->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                                <option value="closed" {{ $ticket->status === 'closed' ? 'selected' : '' }}>Closed</option>
                            </select>
                            <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 font-medium text-sm transition-colors shadow-sm">
                                Update Status
                            </button>
                        </form>

                        {{-- Reply via Email --}}
                        <a href="mailto:{{ $ticket->email }}?subject=Re%3A%20{{ urlencode($ticket->subject ?? 'Your support ticket') }}"
                           class="inline-flex items-center gap-2 px-4 py-2.5 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 font-medium text-sm transition-colors shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                            </svg>
                            Reply via Email
                        </a>
                    </div>

                    {{-- Delete --}}
                    <form action="{{ route('admin.support.destroy', $ticket->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to permanently delete this ticket?');"
                          class="w-full sm:w-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-white border border-red-300 text-red-700 rounded-lg hover:bg-red-50 hover:border-red-400 font-medium transition-colors text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete Ticket
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
