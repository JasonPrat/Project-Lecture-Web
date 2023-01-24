<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionDetail::create([
            'transaction_id' => 1,
            'film_id' => 1,
            'subtotal' => 120.60
        ]);

        TransactionDetail::create([
            'transaction_id' => 1,
            'film_id' => 3,
            'subtotal' => 160.60
        ]);

        TransactionDetail::create([
            'transaction_id' => 2,
            'film_id' => 2,
            'subtotal' => 20.60
        ]);
    }
}
