<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'teacher',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:56:29',
                'updated_at' => '2024-01-28 10:56:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'student',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:57:29',
                'updated_at' => '2024-01-28 10:57:29',
            ),
        ));
        
        
    }
}