<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory {

    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'street' => $this->faker->streetName(),
            'building_number' => $this->faker->word(),
            'apartment_number' => $this->faker->word(),
            'floor_number' => $this->faker->word(),
            'student_id' => $this->faker->randomNumber(),
        ];
    }

}
