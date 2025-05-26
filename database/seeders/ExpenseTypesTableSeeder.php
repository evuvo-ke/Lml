<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpenseTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('expense_types')->delete();
        
        
        
    }
}