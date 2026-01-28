<x-app-layout>
    <div class="max-w-lg mx-auto p-6">
        <h1 class="text-xl font-bold mb-4">Edit Event</h1>

        <form action="{{ route('admin.events.update', $event) }}" method="POST">
            @csrf @method('PUT')

            @include('admin.events.form')

            <a href="{{ url()->previous() }}">
                <button class="px-4 py-2 bg-blue-500 text-white rounded">Back</button>
            </a>

            <button class="px-4 py-2 bg-[#72C02C] text-white rounded">Update</button>
        </form>
    </div>
</x-app-layout>
