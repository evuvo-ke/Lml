<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branches')->delete();
        
        \DB::table('branches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_by_id' => NULL,
                'parent_id' => NULL,
                'manager_id' => NULL,
                'name' => 'Default',
                'open_date' => '2023-11-08',
                'notes' => NULL,
                'active' => 1,
                'is_system' => 1,
                'created_at' => '2023-11-08 17:34:37',
                'updated_at' => '2023-11-08 17:34:37',
            ),
        ));
        
        
    }
}