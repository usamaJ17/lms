<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'create student',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'view student',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'edit student',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'delete student',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'create teacher',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'view teacher',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'edit teacher',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'delete teacher',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'create degree',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'view degree',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'edit degree',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'delete degree',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:19',
                'updated_at' => '2024-01-28 10:55:19',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'create course',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'view course',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'edit course',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'delete course',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'create marks',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'view marks',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'edit marks',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'delete marks',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'create result',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'view result',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'edit result',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'delete result',
                'guard_name' => 'web',
                'created_at' => '2024-01-28 10:55:20',
                'updated_at' => '2024-01-28 10:55:20',
            ),
        ));
        
        
    }
}