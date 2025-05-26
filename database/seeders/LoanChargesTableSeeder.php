<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoanChargesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loan_charges')->delete();
        
        
        
    }
}