<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Modell;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModellFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Modell::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {$name=$this->faker->words(3,true);
        return [//ترتيب عشوائي 
            'brand_id'=>Brand::inRandomOrder()->first()->id,
            'car_id'=>Car::inRandomOrder()->first()->id,
            'name'=>$name,
            'Specifications'=>$this->faker->words(100,true), //100word as text
            'slug'=>Str::slug($name),
             'price'=>$this->faker->numberBetween(50,500),
             'image'=>$this->faker->imageUrl(), //روابط لصور عشوائية
        ];
    }
}

