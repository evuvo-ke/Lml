<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommunicationCampaignAttachmentTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('communication_campaign_attachment_types')->delete();
        
        \DB::table('communication_campaign_attachment_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Loan Schedule',
                'translated_name' => NULL,
                'is_trigger' => 0,
                'active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Client Statement',
                'translated_name' => NULL,
                'is_trigger' => 0,
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Saving Mini Statement',
                'translated_name' => NULL,
                'is_trigger' => 0,
                'active' => 0,
            ),
        ));
        
        
    }
}