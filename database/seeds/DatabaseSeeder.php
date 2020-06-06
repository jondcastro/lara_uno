<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        // php artisan db:seed

    	// php artisan db:seed --class=UsersTableSeeder
    	

    	$data = [
    		['name' => 'jonathan',
    		'email' => 'admin@hotmail.com',
    		'password' => bcrypt('123'),
    		'country' => 'venezuela',
    		'state' => 'caracas'],
    		['name' => 'maria',
    		'email' => 'maria@hotmail.com',
    		'password' => bcrypt('123'),
    		'country' => 'colombia',
    		'state' => 'bogota'
    		]
    	];

    	// $data = array(
    	// 	'name' => 'maria',
    	// 	'email' => 'maria@hotmail.com',
    	// 	'password' => bcrypt('123'),
    	// 	'country' => 'colombia',
    	// 	'state' => 'bogota'
    	// );

    	DB::table('users')->insert($data);


    }
}
