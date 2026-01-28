<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    // ADMIN
    public function index()
    {
        //  return "hello admin";
        $events = Event::latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'date' => 'required|date|after_or_equal:today',
            'max_participants' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return back()
                ->with('error', $validator->errors()->first())
                ->withInput();
        }


        Event::create($request->all());

        return back()->with('success', 'Event created successfully');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|min:3',
            'date' => 'required|date|after_or_equal:today',
            'max_participants' => 'required|integer|min:1',
        ]);

        $event->update($request->all());

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return back()->with('success', 'Event deleted');
    }

    // USER
    public function userEvents()
    {
        // dd(User::all());
        // return "hello user";
        $events = Event::whereDate('date', '>=', today())->latest()->paginate(10);
        return view('events.index', compact('events'));
    }
}
