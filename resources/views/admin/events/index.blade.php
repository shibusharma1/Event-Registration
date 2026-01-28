<x-app-layout>
<div class="max-w-6xl mx-auto p-6">
    <div class="flex justify-between mb-4">
        <h1 class="text-xl font-bold text-[#72C02C]">Manage Events</h1>
        <a href="{{ route('admin.events.create') }}" class="px-4 py-2 bg-[#72C02C] text-white rounded">Add Event</a>
    </div>

    <table class="w-full border rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2">Name</th>
                <th class="p-2">Date</th>
                <th class="p-2">Participants</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr class="border-t">
                <td class="p-2">{{ $event->name }}</td>
                <td class="p-2">{{ $event->date }}</td>
                <td class="p-2">{{ $event->registeredCount() }} / {{ $event->max_participants }}</td>
                <td class="p-2 flex gap-2">
                    <a href="{{ route('admin.events.edit', $event) }}" class="px-3 py-1 bg-[#72C02C] text-white rounded">Edit</a>

                    <form method="POST" action="{{ route('admin.events.destroy', $event) }}">
                        @csrf @method('DELETE')
                        <button onclick="confirmDelete(event)" class="px-3 py-1 bg-red-600 text-white rounded">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $events->links() }}
</div>
</x-app-layout>
