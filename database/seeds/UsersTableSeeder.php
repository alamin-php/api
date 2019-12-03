<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'name' => 'Md.Admin',
    		'email' => 'admin@api.com',
    		'password' => '$2y$10$3dj.cXRgQHcXC57/PhAmruBP9xRGv3Isp2EnJlH2PgkOoVl9ovBeW',
    	]);
    }
}
