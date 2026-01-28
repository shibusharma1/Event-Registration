<div class="min-h-screen p-12 flex items-center justify-center bg-gradient-to-br from-[#72C02C]/40 to-[#72C02C]/10">

    <div class="bg-white max-w-lg w-full mx-4 shadow-2xl border border-[#72C02C]/40 rounded-xl p-4 text-center">

        <!-- Icon -->
        <div class="flex justify-center mb-6">
            <div class="w-20 h-20 bg-[#72C02C] text-white rounded-full flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2z" />
                </svg>
            </div>
        </div>

        <!-- Code -->
        <h1 class="text-5xl font-extrabold text-[#72C02C] mb-3">
            {{ $code ?? 'Error' }}
        </h1>

        <!-- Message -->
        <p class="text-gray-700 text-lg mb-10">
            {{ $message ?? 'Something went wrong. Please try again later.' }}
        </p>

        <!-- Buttons -->
        <div class="flex items-center justify-center gap-4">

            <!-- Back Button -->
            <a href="{{ url()->previous() }}"
               class="px-6 py-3 rounded-lg bg-gray-100 text-gray-700 font-semibold shadow hover:bg-gray-200 transition-all duration-300">
                Go Back
            </a>

            <!-- Home Button -->
            <a href="{{ url('/') }}"
               class="px-6 py-3 rounded-lg bg-[#72C02C] text-white font-semibold shadow hover:bg-[#63A827] transition-all duration-300">
                Home
            </a>
        </div>

    </div>

</div>
