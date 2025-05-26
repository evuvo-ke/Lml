<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('titles')->delete();
        
        
        
    }
}