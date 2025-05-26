<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PayrollItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payroll_items')->delete();
        
        
        
    }
}