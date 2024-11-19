<?php

namespace Database\Factories;

use App\Models\Accounts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountsFactory extends Factory
{
    protected $model = Accounts::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Relasi ke users
            'nama_akun' => $this->faker->word() . ' Account',
            'jenis_akun' => $this->faker->randomElement(['tabungan', 'giro', 'investasi']),
            'saldo' => $this->faker->randomFloat(2, 1000, 100000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
