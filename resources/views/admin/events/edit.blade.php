@section('title', 'Edit Event')
<x-app-layout>
     <div class="min-h-[calc(100vh-80px)] flex items-center justify-center bg-gray-100">

        <div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-lg">

            <h1 class="text-xl text-[#72C02C] font-bold mb-4">
                Edit Event
            </h1>

            <form action="{{ route('admin.events.update', $event) }}" method="POST">
                @csrf
                @method('PUT')

                @include('admin.events.form')

                <div class="flex gap-3 mt-4">
                    <a href="{{ route('admin.events.index') }}"
                       class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 transition flex items-center gap-2">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </a>

                    <button type="submit"
                            class="px-4 py-2 rounded bg-[#72C02C] text-white hover:bg-[#63A827] transition flex items-center gap-2">
                        Update <i class="fa-regular fa-floppy-disk"></i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
