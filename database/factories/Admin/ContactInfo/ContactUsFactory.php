<?php

namespace Database\Factories\Admin\ContactInfo;

use App\Models\Admin\ContactInfo\ContactUs;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactUsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactUs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'phone'   => $this->faker->numerify('3747779599'),
            'email'   => $this->faker->email,
        ];
    }
}
