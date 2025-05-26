<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShareChargeOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('share_charge_options')->delete();
        
        \DB::table('share_charge_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Flat',
                'translated_name' => 'Flat',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Percentage of amount',
                'translated_name' => 'Percentage of amount',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}