<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallet_transactions')->delete();
        
        
        
    }
}