@section('title', 'Error 500')

<x-app-layout>
    @include('errors.template', [
        'code' => 500,
        'message' => 'Something went wrong on our server. Please try again later.',
    ])
</x-app-layout>
