<?php

namespace Database\Factories;

use App\Models\Payments;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentsFactory extends Factory
{
    protected $model = Payments::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->word() . ' Tagihan',
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'due_date' => $this->faker->date(),
            'category' => $this->faker->word(),
            'status' => $this->faker->randomElement(['Paid', 'Unpaid']),
            'recurring' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
