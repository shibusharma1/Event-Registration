<x-app-layout>
    @include('errors.template', [
        'code' => 404,
        'message' => 'The page you are looking for was not found.',
    ])
</x-app-layout>
