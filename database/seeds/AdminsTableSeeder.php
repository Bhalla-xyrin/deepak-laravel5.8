<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$hJni7PDSjzAkfMDGfJtPyedGBtVf.SXLb1MKFEJrTZTRHGPmQjJqS',
                'type' => 'Admin',
                'remember_token' => NULL,
                'created_at' => '2019-09-04 04:20:02',
                'updated_at' => '2019-09-04 04:20:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'vgvg',
                'email' => 'anb@gmail.com',
                'password' => '$2y$10$/sm/EIf4XBMkr7YL73XcxuBWX9ieiPJ7qRNHsPD0REk2EVHp9HPB6',
                'type' => 'Admin',
                'remember_token' => NULL,
                'created_at' => '2019-09-04 07:04:42',
                'updated_at' => '2019-09-04 07:04:42',
            ),
        ));
        
        
    }
}