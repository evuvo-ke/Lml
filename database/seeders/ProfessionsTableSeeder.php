<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professions')->delete();
        
        
        
    }
}