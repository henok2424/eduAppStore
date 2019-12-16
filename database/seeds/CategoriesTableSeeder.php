<?php

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
      category::create([
          'name' => 'Science'
      ]);
      category::create([
          'name' => 'Technology'
      ]);
      category::create([
          'name' => 'Engineering'
      ]);
      category::create([
          'name' => 'Maths'
      ]);

    }
}
