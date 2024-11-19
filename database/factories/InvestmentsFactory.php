<?php

namespace Database\Factories;

use App\Models\Investments;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvestmentsFactory extends Factory
{
    protected $model = Investments::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'nama_investasi' => $this->faker->word() . ' Investment',
            'jenis_investasi' => $this->faker->randomElement(['saham', 'obligasi', 'reksadana']),
            'jumlah_investasi' => $this->faker->randomFloat(2, 1000, 50000),
            'tingkat_pengembalian' => $this->faker->randomFloat(2, 1, 20),
            'tanggal_mulai' => $this->faker->date(),
            'tanggal_selesai' => $this->faker->optional()->date(),
            'status' => $this->faker->randomElement(['aktif', 'selesai']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
