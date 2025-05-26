<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoanRepaymentSchedulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loan_repayment_schedules')->delete();
        
        
        
    }
}