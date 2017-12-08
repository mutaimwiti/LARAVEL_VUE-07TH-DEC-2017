<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Blog::class, 10)->create();
    }
}
