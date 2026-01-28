<x-app-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-xl font-bold mb-4 text-[#72C02C]">Upcoming Events</h1>

        @foreach ($events as $event)
            @php
                // User is registered if the eager-loaded registration collection is not empty
                $isRegistered = $event->registrations->isNotEmpty();
            @endphp


            <div class="bg-white shadow p-4 rounded mb-4">
                <h2 class="font-bold text-lg">{{ $event->name }}</h2>
                <p>{!! $event->description !!}</p>
                <p class="text-gray-600">Date: {{ $event->date }}</p>
                <p class="text-gray-600">Participants: {{ $event->registeredCount() }} / {{ $event->max_participants }}
                </p>

                <div class="mt-3 flex gap-3">
                    <form action="{{ route('events.register', $event) }}" method="POST">
                        @csrf
                        {{-- <button class="px-4 py-2 bg-[#72C02C] text-white rounded">Register</button> --}}
                        <button
                            class="px-4 py-2 text-white rounded 
                        {{ $isRegistered ? 'bg-gray-400 cursor-not-allowed' : 'bg-[#72C02C]' }}"
                            {{ $isRegistered ? 'disabled' : '' }}>
                            <i class="fa-solid fa-check"></i> Register
                        </button>

                    </form>

                    <form action="{{ route('events.cancel', $event) }}" method="POST">
                        @csrf @method('DELETE')
                        {{-- <button class="px-4 py-2 bg-red-600 text-white rounded">Cancel</button> --}}
                        <button
                            class="px-4 py-2 text-white rounded
                        {{ !$isRegistered ? 'bg-gray-400 cursor-not-allowed' : 'bg-red-600' }}"
                            {{ !$isRegistered ? 'disabled' : '' }}>
                            <i class="fa-solid fa-xmark"></i> Cancel
                        </button>
                    </form>
                </div>
            </div>
        @endforeach

        {{ $events->links() }}
    </div>
</x-app-layout>
