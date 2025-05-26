<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssetDepreciationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asset_depreciation')->delete();
        
        
        
    }
}