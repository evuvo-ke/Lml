<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoanProvisioningTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loan_provisioning')->delete();
        
        \DB::table('loan_provisioning')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Current',
                'lower_limit' => 0,
                'upper_limit' => 89,
                'percentage' => 0.0,
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Substandard',
                'lower_limit' => 90,
                'upper_limit' => 179,
                'percentage' => 20.0,
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Doubtful',
                'lower_limit' => 180,
                'upper_limit' => 359,
                'percentage' => 50.0,
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Loss',
                'lower_limit' => 360,
                'upper_limit' => NULL,
                'percentage' => 100.0,
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}