      <div class="bg-white shadow p-4 rounded mb-6">

            <form method="GET" action="{{ auth()->user()->role != 0 ? route('events.index') : route('admin.events.index') }}" class="flex flex-wrap items-end gap-4">
                <div class="w-full sm:w-auto">
                    <label class="block text-sm font-semibold mb-1">Search Event</label>
                    <input type="text" name="search" placeholder="Search by name..." value="{{ request('search') }}"
                        class="border rounded p-2 w-full sm:w-64">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Select Date</label>
                    <input type="date" name="date" value="{{ request('date') }}" min="{{ date('Y-m-d') }}" class="border rounded p-2">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">From</label>
                    <input type="date" name="from_date" value="{{ request('from_date') }}" min="{{ date('Y-m-d') }}"
                        class="border rounded p-2">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">To</label>
                    <input type="date" name="to_date" value="{{ request('to_date') }}" min="{{ date('Y-m-d') }}" class="border rounded p-2">
                </div>

                {{-- Buttons --}}
                <div class="flex items-center gap-3 mt-4 sm:mt-0">

                    <button type="submit"
                        class="px-4 py-2 bg-[#72C02C] text-white rounded flex items-center gap-2 hover:bg-[#63A827]">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>

                    <a href="{{ route('events.index') }}"
                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded flex items-center gap-2 hover:bg-gray-400">
                        <i class="fa-solid fa-rotate-left"></i> Reset
                    </a>

                </div>

            </form>

        </div>