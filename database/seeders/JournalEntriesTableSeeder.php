<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JournalEntriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('journal_entries')->delete();
        
        
        
    }
}