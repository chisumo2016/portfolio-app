<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'institution'   => 'Leicester University',
            'period'        => '2010-2012',
            'degree'        => 'Master Of Science',
            'department'    => 'Computer Science',
        ];
    }
}
