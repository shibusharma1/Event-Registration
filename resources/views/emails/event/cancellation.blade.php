@component('mail::message')
# Hello {{ $user->name }},

You have **cancelled your registration** for the event:

@component('mail::panel')
### **{{ $event->name }}**
Date: {{ $event->date }}
@endcomponent

If you cancelled by mistake, you can always register again.

@component('mail::button', ['url' => route('events.index', $event), 'color' => '#72C02C'])
View Event Page
@endcomponent

Thanks,  
**{{ config('app.name') }}**
@endcomponent
