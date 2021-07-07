<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::inRandomOrder()->first()->id,
            'user_id'    => User::inRandomOrder()->first()->id,
            'quantity'   => $this->faker->biasedNumberBetween(1,10),
            'country'    => $this->faker->country,
            'city'       => $this->faker->city,
            'total_price'=> $this->faker->biasedNumberBetween(150,10000),
            'zip_code'   => $this->faker->biasedNumberBetween(100,999),
            'address'   => $this->faker->address,
        ];
    }
}
