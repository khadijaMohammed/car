<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Modell;
use Illuminate\Database\Seeder;
use Database\Seeders\CarsTableSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
      Modell::factory(10)->create();
     // Tag::factory(10)->create();

        // \App\Models\User::factory(10)->create();
      //  $this->call(CarsTableSeeder::class);
    }
}
