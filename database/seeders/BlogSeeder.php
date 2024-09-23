<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Blogs;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blogs::factory()->count(20)->create();
    }
}
