<?php

namespace Database\Factories\Admin\ContactInfo;

use App\Models\Admin\ContactInfo\HeaderInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeaderInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HeaderInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone'   => $this->faker->numerify('3747779599'),
            'email' => $this->faker->email,
        ];
    }
}
