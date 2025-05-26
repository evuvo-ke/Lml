<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssetFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asset_files')->delete();
        
        
        
    }
}