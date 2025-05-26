<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShareTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('share_transactions')->delete();
        
        
        
    }
}