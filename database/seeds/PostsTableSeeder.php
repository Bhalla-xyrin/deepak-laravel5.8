<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_by' => 1,
                'type' => 'Admin',
                'title' => 'bhb',
                'category' => NULL,
                'description' => '<p>newr</p>',
                'filename' => NULL,
                'mime' => NULL,
                'original_filename' => NULL,
                'created_at' => '2019-09-04 04:50:30',
                'updated_at' => '2019-09-04 08:30:51',
            ),
            1 => 
            array (
                'id' => 2,
                'created_by' => 1,
                'type' => 'Admin',
                'title' => 'bhbv',
                'category' => NULL,
                'description' => '<p>hbhn nhrvebhb</p>',
                'filename' => 'php6B82.tmp.jpg',
                'mime' => 'image/jpeg',
                'original_filename' => 'Penguins.jpg',
                'created_at' => '2019-09-04 04:56:28',
                'updated_at' => '2019-09-04 04:56:28',
            ),
            2 => 
            array (
                'id' => 3,
                'created_by' => 1,
                'type' => 'Admin',
                'title' => 'bhbv',
                'category' => 'Java',
                'description' => '<p>hbhn nhrvebhb</p>',
                'filename' => 'php4906.tmp.jpg',
                'mime' => 'image/jpeg',
                'original_filename' => 'Penguins.jpg',
                'created_at' => '2019-09-04 04:58:31',
                'updated_at' => '2019-09-04 04:58:31',
            ),
            3 => 
            array (
                'id' => 4,
                'created_by' => 1,
                'type' => 'Admin',
                'title' => 'dsw',
                'category' => 'Laravel',
                'description' => '<p>few</p>',
                'filename' => NULL,
                'mime' => NULL,
                'original_filename' => NULL,
                'created_at' => '2019-09-04 04:58:46',
                'updated_at' => '2019-09-04 04:58:46',
            ),
            4 => 
            array (
                'id' => 5,
                'created_by' => 1,
                'type' => 'Admin',
                'title' => 'dsw',
                'category' => 'Php',
                'description' => '<p>few</p>',
                'filename' => NULL,
                'mime' => NULL,
                'original_filename' => NULL,
                'created_at' => '2019-09-04 05:17:33',
                'updated_at' => '2019-09-04 05:17:33',
            ),
        ));
        
        
    }
}