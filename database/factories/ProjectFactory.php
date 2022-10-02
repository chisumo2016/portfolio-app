<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'         =>'Modern Website Portifolio',
            'link'          =>'https://github.com/chisumo2016',
            'avatar'        =>'avatar.png',
            'description'   =>'Website adaptable for all devices',
        ];
    }
}
