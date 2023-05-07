<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder {

    public function run(): void
    {
        Course::factory()->createMany([
            ['title' => 'Math 2'],
            ['title' => 'English Literature'],
            ['title' => 'Computer Science'],
            ['title' => 'History'],
            ['title' => 'Chemistry']
        ]);
    }

}
