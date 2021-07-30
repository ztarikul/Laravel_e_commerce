<?php

namespace Database\Factories;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'customer_id' => rand(1,50),
            'post_id' => rand(1,20),
            'comment_id' => rand(1,30),
            'reply' => $this->faker->text($maxNbChars = 50),
            'created_at' => now(),
        ];
    }
}
