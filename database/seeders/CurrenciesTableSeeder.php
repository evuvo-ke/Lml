<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_by_id' => NULL,
                'rate' => '1.00000000',
                'code' => 'USD',
                'name' => 'United States dollar',
                'symbol' => '$',
                'position' => 'left',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}