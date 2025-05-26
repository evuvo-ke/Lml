<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SavingsChargeTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('savings_charge_types')->delete();
        
        \DB::table('savings_charge_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Savings Activation',
                'translated_name' => 'Savings Activation',
                'active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Specified Due Date',
                'translated_name' => 'Specified Due Date',
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Withdrawal Fee',
                'translated_name' => 'Withdrawal Fee',
                'active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Annual Fee',
                'translated_name' => 'Annual Fee',
                'active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Monthly Fee',
                'translated_name' => 'Monthly Fee',
                'active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Inactivity Fee',
                'translated_name' => 'Inactivity Fee',
                'active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Quarterly Fee',
                'translated_name' => 'Quarterly Fee',
                'active' => 1,
            ),
        ));
        
        
    }
}