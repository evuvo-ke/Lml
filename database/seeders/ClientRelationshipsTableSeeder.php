<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientRelationshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_relationships')->delete();
        
        
        
    }
}