@component('mail::message')
# Hello {{ $user->name }},

You have successfully **registered** for the following event:

@component('mail::panel')
### **{{ $event->name }}**
 Date: {{ $event->date }}  
 Description: {!! $event->description !!}
@endcomponent

@component('mail::button', ['url' => route('events.index', $event), 'color' => '#72C02C'])
View Event Details
@endcomponent

Thanks,  
**{{ config('app.name') }}**
@endcomponent
