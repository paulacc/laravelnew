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
       DB::tables('genres')->insert([
        [
          'name' => 'Test 1',
          'ranking' => '16',
          'active' => 1
        ],
        [
          'name' => 'Test 2',
          'ranking' => '17',
          'active' => 2
        ]

      ]);

        // $this->call(UsersTableSeeder::class);
    }
}
