<?php

namespace Database\Factories;

use App\Models\Transactions;
use App\Models\User;
use App\Models\Accounts;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionsFactory extends Factory
{
    protected $model = Transactions::class;

    public function definition()
    {
        return [
            'account_id' => Accounts::factory(),
            'user_id' => User::factory(),
            'jenis_transaksi' => $this->faker->randomElement(['pendapatan', 'pengeluaran', 'transfer']),
            'jumlah' => $this->faker->randomFloat(2, 10, 5000),
            'tanggal_transaksi' => $this->faker->date(),
            'kategori' => $this->faker->word(),
            'deskripsi' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
