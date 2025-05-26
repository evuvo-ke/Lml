<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SavingsTransactionTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('savings_transaction_types')->delete();
        
        \DB::table('savings_transaction_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Deposit',
                'translated_name' => 'Deposit',
                'active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Withdrawal',
                'translated_name' => 'Withdrawal',
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dividend',
                'translated_name' => 'Dividend',
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
                'name' => 'Guarantee',
                'translated_name' => 'Guarantee',
                'active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Guarantee Restored',
                'translated_name' => 'Guarantee Restored',
                'active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Loan Repayment',
                'translated_name' => 'Loan Repayment',
                'active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Transfer',
                'translated_name' => 'Transfer',
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
            11 => 
            array (
                'id' => 12,
                'name' => 'Pay Charge',
                'translated_name' => 'Pay Charge',
                'active' => 1,
            ),
        ));
        
        
    }
}