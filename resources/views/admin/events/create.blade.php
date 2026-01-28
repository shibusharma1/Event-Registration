<x-app-layout>
<div class="max-w-lg mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">Create Event</h1>

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf

        @include('admin.events.form')

        <button class="px-4 py-2 bg-[#72C02C] text-white rounded">Save</button>
    </form>
</div>
</x-app-layout>
