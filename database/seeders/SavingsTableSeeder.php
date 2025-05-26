<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SavingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('savings')->delete();
        
        
        
    }
}