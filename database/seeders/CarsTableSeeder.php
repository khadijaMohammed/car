<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use stdClass;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            // insert to one car
            'name' => 'Car ',
            //str helper class contain multi methode
            'slug' => Str::slug('Car'),
            'description' => 'Car description text',
            'licences_number'=>'99 999 999',
            'car_number'=>'123456',
            'parent_id' => 1,
        ]);
    }
}
