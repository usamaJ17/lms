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
                'name' => 'usama',
                'email' => 'admin@lms.com',
                'email_verified_at' => NULL,
                'password' => '$2a$12$Dmx77y0aU/t0Tl37kCS1ae1GXmW/FJ2V6yVsW5aELy7DXGkkYg49W',
                'degree_id' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-28 10:38:15',
                'updated_at' => '2024-01-28 10:38:15',
            ),
        ));
        
        
    }
}