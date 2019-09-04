<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('authors')->delete();
        
        \DB::table('authors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'anb@gmail.com',
                'email' => 'anb@gmail.com',
                'password' => '$2y$10$lOQqPyrvop.L8456NQnqyu5bNyQUKsdzn8O8pMmVFH3u0M8NbGGmW',
                'type' => 'Author',
                'remember_token' => NULL,
                'created_at' => '2019-09-04 07:05:26',
                'updated_at' => '2019-09-04 07:05:26',
            ),
        ));
        
        
    }
}