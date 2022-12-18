<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(1, true),
            'content'=>$this->faker->text(100),
            'image' =>$this->faker->imageUrl(),
            'is_published' => $this->faker->boolean(),
            'categories_id'=>"1"
        ];
    }
}
