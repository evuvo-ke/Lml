<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_by_id' => NULL,
                'branch_id' => 1,
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@localhost.com',
                'email_verified_at' => '2023-11-08 17:34:37',
                'password' => '$2y$10$NuUcgqvBDO1LXs1zoV0Ce.8nDcy9pdpgVFhhuSJcK17O8K6RtvgUm',
                'api_token' => 'pkOAXySek4LTV4wXH5e8AzWlnncVLoNdqKrmUdcmj8ySb5RqF3FCmwyuhddO',
                'last_login' => NULL,
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'phone' => NULL,
                'address' => NULL,
                'city' => NULL,
                'gender' => NULL,
                'enable_google2fa' => 0,
                'google2fa_secret' => NULL,
                'otp' => NULL,
                'otp_expiry_date' => NULL,
                'notes' => NULL,
                'photo' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-08 17:34:37',
                'updated_at' => '2023-11-08 17:34:37',
            ),
        ));
        
        
    }
}