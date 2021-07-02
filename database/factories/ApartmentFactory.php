<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "address"=>$this->faker->name(),
            "price"=>$this->faker->numberBetween(100,5000),
            "general_information"=>$this->faker->paragraph(),
            "detail"=>$this->faker->paragraph(),
            "image"=>$this->faker->image(),
            "status"=>$this->faker->name()
        ];
    }
}
