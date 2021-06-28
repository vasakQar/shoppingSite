<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => $this->faker->name,
            'description_en' => $this->faker->text,
            'description_ru' => $this->faker->text,
            'description_am' => $this->faker->text,
            'price' => $this->faker->randomDigit,
            'old_price' => $this->faker->randomDigit,
            'images' => [$this->faker->image('public/storage/images',640,480, null, false)],
        ];
    }
}
