<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;
use App\Models\Registration;

class RegistrationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::where('role', 1)->get(); // Normal users only
        $events = Event::all();

        foreach ($events as $event) {
            $max = rand(5, $event->max_participants); // random participants

            $selectedUsers = $users->random(min($max, $users->count()));

            foreach ($selectedUsers as $user) {
                Registration::create([
                    'event_id' => $event->id,
                    'user_id' => $user->id
                ]);
            }
        }
    }
}
