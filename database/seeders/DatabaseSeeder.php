<?php

namespace Database\Seeders;

use App\Models\Admin\ContactInfo\ContactUs;
use App\Models\Admin\ContactInfo\HeaderInfo;
use App\Models\Admin\ContactInfo\SocialSite;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use Database\Factories\ContactUsFactory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(20)->create();
         Category::factory(20)->create();
         Product::factory(20)->create();
         Order::factory(20)->create();
         ContactUs::factory(1)->create();
         HeaderInfo::factory(1)->create();
         SocialSite::factory(1)->create();
    }
}
