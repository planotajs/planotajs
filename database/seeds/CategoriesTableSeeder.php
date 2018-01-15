<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        Categories::create(array('name' => 'Food'));
        Categories::create(array('name' => 'Salary'));
        Categories::create(array('name' => 'Transport'));
        Categories::create(array('name' => 'Rent'));
        Categories::create(array('name' => 'Gift'));
        Categories::create(array('name' => 'Other'));
    }
}
