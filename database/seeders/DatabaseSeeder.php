<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 students
        $students = Student::factory()->count(30)->create();

        // Create subjects for each student
        foreach ($students as $student) {
            Subject::factory()->count(4)->create([
                'student_id' => $student->id
            ]);
        }
    }
}
