
<x-app-layout>
    @include('errors.template', [
        'code' => 403,
        'message' => 'You are not authorized to access this page.',
    ])
</x-app-layout>
