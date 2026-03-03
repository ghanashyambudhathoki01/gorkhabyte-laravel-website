<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">
                    Support Center
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    Manage support tickets from users
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Success Message --}}
            @if (session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-xl text-emerald-800 flex items-center gap-3">
                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            {{-- Status Filter Tabs --}}
            <div class="mb-6 flex flex-wrap gap-2">
                @php
                    $currentStatus = request('status', 'all');
                    $tabs = [
                        'all' => ['label' => 'All Tickets', 'color' => 'gray'],
                        'new' => ['label' => 'New', 'color' => 'blue'],
                        'open' => ['label' => 'Open', 'color' => 'amber'],
                        'resolved' => ['label' => 'Resolved', 'color' => 'emerald'],
                        'closed' => ['label' => 'Closed', 'color' => 'gray'],
                    ];
                @endphp
                @foreach ($tabs as $key => $tab)
                    <a href="{{ route('admin.support.index', ['status' => $key]) }}"
                       class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200
                              {{ $currentStatus === $key
                                  ? 'bg-indigo-600 text-white shadow-md'
                                  : 'bg-white text-gray-600 border border-gray-200 hover:bg-gray-50' }}">
                        {{ $tab['label'] }}
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full text-xs font-bold
                              {{ $currentStatus === $key ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-600' }}">
                            {{ $counts[$key] }}
                        </span>
                    </a>
                @endforeach
            </div>

            {{-- Tickets Table --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Ticket</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Sender</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider hidden md:table-cell">Category</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider hidden sm:table-cell">Priority</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider hidden lg:table-cell">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider hidden lg:table-cell">Date</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @forelse ($tickets as $ticket)
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    {{-- Ticket # & Subject --}}
                                    <td class="px-6 py-4">
                                        <div class="text-xs font-bold text-indigo-600">{{ $ticket->ticket_number }}</div>
                                        <div class="text-sm font-medium text-gray-900 mt-0.5">{{ Str::limit($ticket->subject, 35) }}</div>
                                    </td>

                                    {{-- Sender --}}
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $ticket->name }}</div>
                                        <div class="text-xs text-gray-500">{{ $ticket->email }}</div>
                                    </td>

                                    {{-- Category Badge --}}
                                    <td class="px-6 py-4 hidden md:table-cell">
                                        @php
                                            $categoryColors = [
                                                'general' => 'bg-gray-100 text-gray-700',
                                                'technical' => 'bg-blue-100 text-blue-800',
                                                'billing' => 'bg-amber-100 text-amber-800',
                                                'account' => 'bg-purple-100 text-purple-800',
                                                'feedback' => 'bg-cyan-100 text-cyan-800',
                                            ];
                                        @endphp
                                        <span class="inline-flex px-2.5 py-1 rounded-lg text-xs font-semibold {{ $categoryColors[$ticket->category] ?? 'bg-gray-100 text-gray-700' }}">
                                            {{ ucfirst($ticket->category) }}
                                        </span>
                                    </td>

                                    {{-- Priority Badge --}}
                                    <td class="px-6 py-4 hidden sm:table-cell">
                                        @php
                                            $priorityColors = [
                                                'low' => 'bg-gray-100 text-gray-700',
                                                'medium' => 'bg-blue-100 text-blue-700',
                                                'high' => 'bg-orange-100 text-orange-700',
                                                'urgent' => 'bg-red-100 text-red-700',
                                            ];
                                        @endphp
                                        <span class="inline-flex px-2.5 py-1 rounded-lg text-xs font-bold {{ $priorityColors[$ticket->priority] ?? 'bg-gray-100 text-gray-700' }}">
                                            {{ ucfirst($ticket->priority) }}
                                        </span>
                                    </td>

                                    {{-- Status Badge --}}
                                    <td class="px-6 py-4 hidden lg:table-cell">
                                        @php
                                            $statusColors = [
                                                'new' => 'bg-blue-100 text-blue-800',
                                                'open' => 'bg-amber-100 text-amber-800',
                                                'resolved' => 'bg-emerald-100 text-emerald-800',
                                                'closed' => 'bg-gray-200 text-gray-600',
                                            ];
                                        @endphp
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold {{ $statusColors[$ticket->status] ?? 'bg-gray-100 text-gray-700' }}">
                                            <span class="w-1.5 h-1.5 rounded-full
                                                {{ $ticket->status === 'new' ? 'bg-blue-500' : '' }}
                                                {{ $ticket->status === 'open' ? 'bg-amber-500' : '' }}
                                                {{ $ticket->status === 'resolved' ? 'bg-emerald-500' : '' }}
                                                {{ $ticket->status === 'closed' ? 'bg-gray-400' : '' }}
                                            "></span>
                                            {{ ucfirst($ticket->status) }}
                                        </span>
                                    </td>

                                    {{-- Date --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                                        {{ $ticket->created_at->format('M d, Y') }}
                                    </td>

                                    {{-- Actions --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex items-center gap-3">
                                            <a href="{{ route('admin.support.show', $ticket->id) }}" class="text-indigo-600 hover:text-indigo-900 font-semibold">View</a>
                                            <form action="{{ route('admin.support.destroy', $ticket->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this ticket?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-16 text-center">
                                        <div class="flex flex-col items-center">
                                            <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mb-4">
                                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                                </svg>
                                            </div>
                                            <p class="text-gray-500 font-medium">No support tickets found</p>
                                            <p class="text-gray-400 text-sm mt-1">Tickets submitted through the Support Center will appear here.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($tickets->hasPages())
                    <div class="px-6 py-4 border-t border-gray-100">
                        {{ $tickets->withQueryString()->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
