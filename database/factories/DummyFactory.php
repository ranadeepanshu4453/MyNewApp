<?php

namespace Database\Factories;

use App\Models\Factory as ModelsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factory>
 */
class DummyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=ModelsFactory::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->unique()->email,
            'address'=>$this->faker->address,
            //
        ];
    }
}
