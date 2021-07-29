<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClothingProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'category_id' => 1,
            'sub_category_id' => rand(1,4),
            'sub_sub_catagory_id' => rand(1,6),
            'name' => $this->faker->name(),
            'description' => $this->faker->text($maxNbChars = 500),
            'content' => $this->faker->text($maxNbChars = 200),
            'image_1' => 'null',
            'image_2' => 'null',
            'image_3' => 'null',
            'image_4' => 'null',
            'price' => rand(500,2000),
            'quantity' => rand(1,20),
            'hot_deal' => rand(1,4),
            'special_offer' => rand(1,4),
            'collection' => rand(1,6),
            'created_at' => now(),
        ];
    }
}
