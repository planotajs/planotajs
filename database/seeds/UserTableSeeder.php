<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(array('name' => 'admin',
                           'email' => 'admin@planotajs.dev', 
                           'password' => bcrypt('secret'),
                           'role' => 2,
                           'language' => 2));
    }
}
