<?php

namespace Database\Factories;

use App\Models\Book_Store;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Book_StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book_Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' =>$this->faker->name(),
            'title' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100, 1000),
            'category' => $this->faker->word,
        ];
    }
}
