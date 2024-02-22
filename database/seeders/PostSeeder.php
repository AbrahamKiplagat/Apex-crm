<?php

namespace Database\Seeders;
// database/seeders/PostSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Create 10 posts
        Post::factory(10)->create();
    }
}
