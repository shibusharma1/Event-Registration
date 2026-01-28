@section('title', 'Error 503')
<x-app-layout>
    @include('errors.template', [
        'code' => 503,
        'message' => 'We are down for maintenance. Please check back soon.',
    ])
</x-app-layout>
