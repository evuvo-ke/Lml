<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PayrollPaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payroll_payments')->delete();
        
        
        
    }
}