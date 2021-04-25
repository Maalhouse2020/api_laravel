<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Author::class,3)->create();
        //factory(App\Models\Author::class,3)->create();
        //\App\Models\Author::factory(3)->create();
    }
}
