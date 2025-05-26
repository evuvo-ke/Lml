<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_system' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2023-11-08 17:34:37',
                'updated_at' => '2023-11-08 17:34:37',
            ),
            1 => 
            array (
                'id' => 2,
                'is_system' => 1,
                'name' => 'client',
                'guard_name' => 'web',
                'created_at' => '2023-11-08 17:34:37',
                'updated_at' => '2023-11-08 17:34:37',
            ),
        ));
        
        
    }
}