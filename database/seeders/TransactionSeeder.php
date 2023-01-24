<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'user_id' => 2,
            'type' => 'buy',
            'grandtotal' => 281.20
        ]);

        Transaction::create([
            'user_id' => 2,
            'type' => 'rent',
            'grandtotal' => 20.60
        ]);
    }
}
