<?php

namespace Database\Factories;

use App\Models\Goals;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoalsFactory extends Factory
{
    protected $model = Goals::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'nama_tujuan' => $this->faker->word() . ' Goal',
            'jumlah_target' => $this->faker->randomFloat(2, 1000, 20000),
            'jumlah_sekarang' => $this->faker->randomFloat(2, 0, 15000),
            'tanggal_jatuh_tempo' => $this->faker->date(),
            'status' => $this->faker->randomElement(['aktif', 'selesai', 'dibatalkan']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
