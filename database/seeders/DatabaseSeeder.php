<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Accounts;
use App\Models\Investments;
use App\Models\Goals;
use App\Models\Transactions;
use App\Models\Payments;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();
        Investments::factory(20)->create();
        Goals::factory(15)->create();
        Transactions::factory(50)->create();
        Payments::factory(30)->create();
        Accounts::factory(20)->create();
    }
}
