<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoanTransactionTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loan_transaction_types')->delete();
        
        \DB::table('loan_transaction_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Disbursement',
                'translated_name' => 'Disbursement',
                'active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Repayment',
                'translated_name' => 'Repayment',
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Contra',
                'translated_name' => 'Contra',
                'active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Waive Interest',
                'translated_name' => 'Waive Interest',
                'active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Repayment At Disbursement',
                'translated_name' => 'Repayment At Disbursement',
                'active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Write Off',
                'translated_name' => 'Write Off',
                'active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Marked for Rescheduling',
                'translated_name' => 'Marked for Rescheduling',
                'active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Recovery Repayment',
                'translated_name' => 'Recovery Repayment',
                'active' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Waive Charges',
                'translated_name' => 'Waive Charges',
                'active' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Apply Charges',
                'translated_name' => 'Apply Charges',
                'active' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Apply Interest',
                'translated_name' => 'Apply Interest',
                'active' => 1,
            ),
        ));
        
        
    }
}