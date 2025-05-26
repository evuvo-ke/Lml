<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_users')->delete();
        
        
        
    }
}