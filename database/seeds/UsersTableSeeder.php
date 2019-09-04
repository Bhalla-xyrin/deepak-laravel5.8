<?php

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
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tD6Dw/lMhlow44llx08yFuWWvyWzNlDOzvyjjzU2DSAUFStXsrYfW',
                'remember_token' => NULL,
                'created_at' => '2019-09-04 04:11:09',
                'updated_at' => '2019-09-04 04:11:09',
            ),
        ));
        
        
    }
}