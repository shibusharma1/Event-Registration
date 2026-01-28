<x-app-layout>
    @include('errors.template', [
        'code' => 419,
        'message' => 'Your session has expired. Please refresh and try again.',
    ])
</x-app-layout>
