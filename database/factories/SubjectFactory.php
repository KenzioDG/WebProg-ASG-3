<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition()
    {
        $subjectNames = ['Math', 'Science', 'History', 'English', 'Art', 'Music', 'Chem', 'P.E.','Japanese','Computer Science','Statistics','Law','Phylosophy'];
        $subjectName = $this->faker->randomElement($subjectNames);

        return [
            'name' => $subjectName,
        ];
    }
}
