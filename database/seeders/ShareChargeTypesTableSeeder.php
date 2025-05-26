<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShareChargeTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('share_charge_types')->delete();
        
        \DB::table('share_charge_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Share Account Activation',
                'translated_name' => 'Share Account Activation',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Share Purchase',
                'translated_name' => 'Share Purchase',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Share Redeem',
                'translated_name' => 'Share Redeem',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}