<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WidgetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('widgets')->delete();
        
        
        
    }
}