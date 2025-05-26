<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssetMaintenanceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asset_maintenance')->delete();
        
        
        
    }
}