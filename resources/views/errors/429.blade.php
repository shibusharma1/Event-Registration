@section('title', 'Error 429')
<x-app-layout>
    @include('errors.template', [
        'code' => 429,
        'message' => 'Too many requests. Slow down a little!',
    ])
</x-app-layout>
