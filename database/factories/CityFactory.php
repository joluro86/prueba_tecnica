<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    protected $table= City::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
        ];
    }
}
