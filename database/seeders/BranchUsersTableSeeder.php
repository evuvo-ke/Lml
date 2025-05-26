<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branch_users')->delete();
        
        
        
    }
}