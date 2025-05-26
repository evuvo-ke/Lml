<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SavingsChargesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('savings_charges')->delete();
        
        
        
    }
}