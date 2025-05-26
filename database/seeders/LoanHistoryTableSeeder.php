<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoanHistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loan_history')->delete();
        
        
        
    }
}