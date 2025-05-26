<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SavingsChargeOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('savings_charge_options')->delete();
        
        \DB::table('savings_charge_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Flat',
                'translated_name' => 'Flat',
                'active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Percentage of amount',
                'translated_name' => 'Percentage of amount',
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Percentage of savings balance',
                'translated_name' => 'Percentage of savings balance',
                'active' => 1,
            ),
        ));
        
        
    }
}