<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function register(Event $event)
    {
        if ($event->registeredCount() >= $event->max_participants) {
            return back()->with('error', 'Event is full');
        }

        $exists = Registration::where([
            'user_id' => Auth::id(),
            'event_id' => $event->id
        ])->exists();

        if ($exists) {
            return back()->with('error', 'Already registered');
        }

        Registration::create([
            'event_id' => $event->id,
            'user_id' => Auth::id(),
        ]);

        return back()->with('success', 'Registered successfully');
    }

    public function cancel(Event $event)
    {
        Registration::where([
            'user_id' => Auth::id(),
            'event_id' => $event->id,
        ])->delete();

        return back()->with('success', 'Registration cancelled');
    }
}
