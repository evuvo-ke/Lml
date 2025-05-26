<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_files')->delete();
        
        
        
    }
}