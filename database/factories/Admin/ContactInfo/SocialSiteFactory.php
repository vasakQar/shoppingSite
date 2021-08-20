<?php

namespace Database\Factories\Admin\ContactInfo;

use App\Models\Admin\ContactInfo\SocialSite;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialSiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialSite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'facebook'   => 'https://www.facebook.com/',
            'twitter'    => 'https://twitter.com/?lang=en',
            'googleplus' => 'https://myaccount.google.com/profile',
            'rss'        => 'https://dashboard.rss.com/auth/sign-in/',
            'pintrest'   => 'https://www.pinterest.com/',
            'linkedin'   => 'https://www.linkedin.com/login?',
            'youtube'    => 'https://www.youtube.com/',
        ];
    }
}
