<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    public function run(): void
    {
        $events = [
            'Laravel Developers Meetup',
            'AI & Machine Learning Workshop',
            'Cybersecurity Awareness Bootcamp',
            'Cloud Computing with AWS',
            'Full Stack Web Development Conference',
            'Mobile App Hackathon',
            'DevOps CI/CD Essentials Training',
            'UI/UX Design Sprint',
            'Data Science & Python Summit',
            'React.js Hands-on Training',
            'Laravel API Masterclass',
            'Node.js Real-Time Apps Seminar',
            'Penetration Testing (Ethical Hacking) Bootcamp',
            'Blockchain Technology Seminar',
            'Software Testing QA Session',
            'AI Prompt Engineering Workshop',
            'Docker & Kubernetes Deployment Bootcamp',
            'IT Career Guidance Seminar',
            'Cyber Forensics Introductory Event',
            'Big Data Analytics Conference'
        ];

        foreach ($events as $name) {
            Event::create([
                'name' => $name,
                'description' => fake()->paragraph(),
                'date' => Carbon::now()->addDays(rand(5, 60)),  
                'max_participants' => rand(20, 60),
            ]);
        }
    }
}
